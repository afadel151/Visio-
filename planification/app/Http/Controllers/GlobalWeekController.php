<?php

namespace App\Http\Controllers;

use App\Models\GlobalWeek;
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
    public function index()
    {
        //
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
        $battalion1 = Battalion::where('schoolyear_id',$request->schoolyear_id)->where('battalion',1)->first();
        $battalion2 = Battalion::where('schoolyear_id',$request->schoolyear_id)->where('battalion',2)->first();
        $battalion3 = Battalion::where('schoolyear_id',$request->schoolyear_id)->where('battalion',3)->first();
        $week1 = new Week;
        $week2 = new Week;
        $week3 = new Week;
        $events = new Event;
        $sportevents = new SportEvent;
        $g = GlobalWeek::create([
            'start_week_date' => $request->start_week_date ,
            'end_week_date' => $request->end_week_date,
            'schoolyear_id' => $request->schoolyear_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $week1->global_week_id = $g->id;
        $week1->battalion_id = $battalion1->id;
        $week1->week_type  = $request->type_1;
        if ($request->type_1 == 'Cours') {
            $nbc1 = Week::where('battalion_id',$battalion1->id)->where('week_type','Cours')->where('semester',$request->semester_1)->count();
            $week1->week_number = $nbc1 + 1;
        }
        else {
            $week1->week_number = 0;
        }
        $week1->semester = $request->semester_1;
        $week1->sport_exam = $request->sport_1 ? true : false;
        $week1->cc = $request->cc_1  ? true : false;
        $week1->save();
        
        $week2->global_week_id = $g->id;
        $week2->battalion_id = $battalion2->id;
        $week2->week_type  = $request->type_2;
        $week2->semester = $request->semester_2;
        if ($week2->week_type == "Cours") {
            $nbc2 = Week::where('battalion_id',$battalion2->id)->where('week_type','Cours')->where('semester',$request->semester_2)->count();
            $week2->week_number = $nbc2 + 1;
        }
        else {
            $week2->week_number = 0;
        }
        $week2->sport_exam = $request->sport_2  ? true : false;
        $week2->cc = $request->cc_2 ? true : false;
        $week2->save();

        $week3->global_week_id = $g->id;
        $week3->battalion_id = $battalion3->id;
        $week3->week_type  = $request->type_3;
        $week3->semester = $request->semester_3;
        if ($week3->week_type == 'Cours') {
            $nbc3 = Week::where('battalion_id',$battalion3->id)->where('week_type','Cours')->where('semester',$request->semester_3)->count();
            $week3->week_number = $nbc3 + 1;
        }
        else {
            $week3->week_number = 0;
        }
        $week3->sport_exam = $request->sport_3  ? true : false;
        $week3->cc = $request->cc_3  ? true : false;
        $week3->save();


        $events->event = $request->event ? $request->event : '/' ;
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
    public function destroy(GlobalWeek $globalWeek)
    {
        //
    }
}
