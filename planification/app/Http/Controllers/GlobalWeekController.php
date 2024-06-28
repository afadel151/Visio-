<?php

namespace App\Http\Controllers;

use App\Models\GlobalWeek;
use App\Models\SchoolYear;
use App\Models\Week;
use App\Models\Battalion;
use App\Models\Event;
use App\Models\SportEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GlobalWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store_middle(Request $request)
    {
        $NewStartDate = date('Y-m-d', strtotime('+7 days', strtotime($request->start_week_date)));
        $NewEndDate = date('Y-m-d', strtotime('+7 days', strtotime($request->end_week_date)));
        $battalion1 = Battalion::where('schoolyear_id', $request->schoolyear_id)->where('battalion', 1)->first();
        $battalion2 = Battalion::where('schoolyear_id', $request->schoolyear_id)->where('battalion', 2)->first();
        $battalion3 = Battalion::where('schoolyear_id', $request->schoolyear_id)->where('battalion', 3)->first();
        $week1 = new Week;
        $week2 = new Week;
        $week3 = new Week;
        $events = new Event;
        $sportevents = new SportEvent;
        $GlobalWeeks = GlobalWeek::where('schoolyear_id', $request->schoolyear_id)->where('start_week_date', '>=', $NewStartDate)->get();
        foreach ($GlobalWeeks as $GlobalWeek) {
            $oldStartdate = $GlobalWeek->start_week_date;
            $oldEnddate = $GlobalWeek->end_week_date;
            $NewSd = date('Y-m-d', strtotime('+7 days', strtotime($oldStartdate)));
            $newEd = date('Y-m-d', strtotime('+7 days', strtotime($oldEnddate)));
            $GlobalWeek->start_week_date = $NewSd;
            $GlobalWeek->end_week_date = $newEd;
            $GlobalWeek->global_week_number = $GlobalWeek->global_week_number+1 ;
            $GlobalWeek->update();
        }
        $Max =  GlobalWeek::where('schoolyear_id', $request->schoolyear_id)->where('start_week_date', '<=', $NewStartDate)->max('global_week_number');
        $g = GlobalWeek::create([
            'start_week_date' => $NewStartDate,
            'end_week_date' => $NewEndDate,
            'schoolyear_id' => $request->schoolyear_id,
            'global_week_number' => $Max + 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $week1->global_week_id = $g->id;
        $week1->battalion_id = $battalion1->id;
        $week1->week_type = $request->type_1;
        if ($request->type_1 == 'Cours') {
            $nbc1 = Week::where('battalion_id', $battalion1->id)->where('week_type', 'Cours')->where('semester', $request->semester_1)->count();
            $week1->week_number = $nbc1 + 1;
        } else {
            $week1->week_number = 0;
        }
        $week1->semester = $request->semester_1;
        $week1->sport_exam = $request->sport_1 ? true : false;
        $week1->cc = $request->cc_1 ? true : false;
        $week1->save();

        $week2->global_week_id = $g->id;
        $week2->battalion_id = $battalion2->id;
        $week2->week_type = $request->type_2;
        $week2->semester = $request->semester_2;
        if ($week2->week_type == "Cours") {
            $nbc2 = Week::where('battalion_id', $battalion2->id)->where('week_type', 'Cours')->where('semester', $request->semester_2)->count();
            $week2->week_number = $nbc2 + 1;
        } else {
            $week2->week_number = 0;
        }
        $week2->sport_exam = $request->sport_2 ? true : false;
        $week2->cc = $request->cc_2 ? true : false;
        $week2->save();

        $week3->global_week_id = $g->id;
        $week3->battalion_id = $battalion3->id;
        $week3->week_type = $request->type_3;
        $week3->semester = $request->semester_3;
        if ($week3->week_type == 'Cours') {
            $nbc3 = Week::where('battalion_id', $battalion3->id)->where('week_type', 'Cours')->where('semester', $request->semester_3)->count();
            $week3->week_number = $nbc3 + 1;
        } else {
            $week3->week_number = 0;
        }
        $week3->sport_exam = $request->sport_3 ? true : false;
        $week3->cc = $request->cc_3 ? true : false;
        $week3->save();


        $events->event = $request->event ? $request->event : '/';
        $events->event_date = date('Y-m-d');
        $events->global_week_id = $g->id;
        $events->save();

        $sportevents->sport_event = $request->sport_event ? $request->sport_event : '/';
        $sportevents->global_week_id = $g->id;
        $sportevents->save();



        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $battalion1 = Battalion::where('schoolyear_id', $request->schoolyear_id)->where('battalion', 1)->first();
        $battalion2 = Battalion::where('schoolyear_id', $request->schoolyear_id)->where('battalion', 2)->first();
        $battalion3 = Battalion::where('schoolyear_id', $request->schoolyear_id)->where('battalion', 3)->first();
        $week1 = new Week;
        $week2 = new Week;
        $week3 = new Week;
        $events = new Event;
        $sportevents = new SportEvent;
        if (GlobalWeek::where('schoolyear_id',$request->schoolyear_id)->get()->isNotEmpty()) {
            $Max = GlobalWeek::where('schoolyear_id',$request->schoolyear_id)->max('global_week_number') + 1;
            $g = GlobalWeek::create([
                
                'start_week_date' => $request->start_week_date,
                'end_week_date' => $request->end_week_date,
                'schoolyear_id' => $request->schoolyear_id,
                'global_week_number' => $Max,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        else {
            $g = GlobalWeek::create([
                'global_week_number' => 1,
                'start_week_date' => SchoolYear::find($request->schoolyear_id)->schoolyear_start_date,
                'end_week_date' => date('Y-m-d', strtotime('+4 days', strtotime(SchoolYear::find($request->schoolyear_id)->schoolyear_start_date))),
                'schoolyear_id' => $request->schoolyear_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $week1->global_week_id = $g->id;
        $week1->battalion_id = $battalion1->id;
        $week1->week_type = $request->type_1;
        if ($request->type_1 == 'Cours') {
            $nbc1 = Week::where('battalion_id', $battalion1->id)->where('week_type', 'Cours')->where('semester', $request->semester_1)->count();
            $week1->week_number = $nbc1 + 1;
        } else {
            $week1->week_number = 0;
        }
        $week1->semester = $request->semester_1;
        $week1->sport_exam = $request->sport_1 ? true : false;
        $week1->cc = $request->cc_1 ? true : false;
        $week1->save();

        $week2->global_week_id = $g->id;
        $week2->battalion_id = $battalion2->id;
        $week2->week_type = $request->type_2;
        $week2->semester = $request->semester_2;
        if ($week2->week_type == "Cours") {
            $nbc2 = Week::where('battalion_id', $battalion2->id)->where('week_type', 'Cours')->where('semester', $request->semester_2)->count();
            $week2->week_number = $nbc2 + 1;
        } else {
            $week2->week_number =0;
        }
        $week2->sport_exam = $request->sport_2 ? true : false;
        $week2->cc = $request->cc_2 ? true : false;
        $week2->save();

        $week3->global_week_id = $g->id;
        $week3->battalion_id = $battalion3->id;
        $week3->week_type = $request->type_3;
        $week3->semester = $request->semester_3;
        if ($week3->week_type == 'Cours') {
            $nbc3 = Week::where('battalion_id', $battalion3->id)->where('week_type', 'Cours')->where('semester', $request->semester_3)->count();
            $week3->week_number = $nbc3 + 1;
        } else {
            $week3->week_number = 0;
        }
        $week3->sport_exam = $request->sport_3 ? true : false;
        $week3->cc = $request->cc_3 ? true : false;
        $week3->save();


        $events->event = $request->event ? $request->event : '/';
        $events->event_date = date('Y-m-d');
        $events->global_week_id = $g->id;
        $events->save();

        $sportevents->sport_event = $request->sport_event ? $request->sport_event : '/';
        $sportevents->global_week_id = $g->id;
        $sportevents->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(GlobalWeek $globalWeek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GlobalWeek $globalWeek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GlobalWeek $globalWeek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $global_week = GlobalWeek::find($id);
        $start_date = $global_week->start_week_date;
        $GlobalWeeks = GlobalWeek::where('start_week_date', '>', $start_date)->get();
        $OldWeks = $global_week->weeks;
        foreach ($GlobalWeeks as $g) {
            $g->start_week_date = date('Y-m-d', strtotime('-7 days', strtotime($g->start_week_date)));
            $g->end_week_date = date('Y-m-d', strtotime('-7 days', strtotime($g->end_week_date)));
            $g->update();
            $NewWeeks = $g->weeks;
            foreach ($OldWeks as $o) {
                foreach ($NewWeeks as $wee) {
                    if(($wee->week_type == $o->week_type) && ($wee->week_type == 'Cours') && ($o->battalion_id == $wee->battalion_id)) {
                        $wee->week_number = $wee->week_number - 1;
                        $wee->update();
                    }
                }
            }            
        }
        GlobalWeek::destroy($id);
        foreach ($GlobalWeeks as $g) {
            $oldGWnmber = $g->global_week_number ;
            $g->global_week_number = $oldGWnmber- 1;
            $g->update();
        }
        return redirect()->back();
    }
}
