<?php

namespace App\Http\Controllers;

use App\Models\GlobalWeek;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\SchoolYear;
use App\Models\Week;

class SchoolYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        if ($request->ajax()) {
            $schoolyears = SchoolYear::all();

            return Datatables::of($schoolyears)
                ->addIndexColumn()
                ->addColumn('global_weeks', function($schoolyear){
                    return $schoolyear->global_weeks->count();
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/schoolyears/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);

        };
        $schoolyears = SchoolYear::all();
        return view('schoolyears.index', ['schoolyears' => $schoolyears]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schoolyear = new SchoolYear;
        $schoolyear->schoolyear = $request->input('schoolyear');
        $schoolyear->schoolyear_start_date = $request->input('schoolyear_start_date');
        $schoolyear->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id,Request $request)
    {

        if ($request->ajax()) {
            $schoolyear = SchoolYear::find($id);
            $global_weeks = $schoolyear->global_weeks;
            return Datatables::of($global_weeks)
             
                ->addColumn('battalion_1', function ($global_week) {
                    $week = new Week();
                    $week = $global_week->weeks->first(function ($week) {
                        return $week->battalion->battalion == 1;
                    });
                
                    return  $week ? $week : '' ;
                    
                })
                ->addColumn('battalion_2', function ($row) {
                    $week = new Week();
                    $week = $row->weeks->first(function ($week) {
                        return $week->battalion->battalion == 2;
                    });
                
                    return $week ? $week : '';
                })
                ->addColumn('battalion_3', function ($global_week) {
                    $week = new Week();
                    $week = $global_week->weeks->first(function ($week) {
                        return $week->battalion->battalion == 3;
                    });
                
                    return $week ? $week : '';
                })
                ->addColumn('events',function($global_week){
                    $events = '';
                    foreach ($global_week->events as $event) {
                        $events = $events . $event->event;
                    }
                    return $events;
                })
                ->addColumn('sport_events',function($global_week){
                    $sport_events = '';
                    foreach ($global_week->sport_events as $sport_event) {
                        $sport_events = $sport_events . $sport_event->sport_event;
                    }
                    return $sport_events;
                })
                ->make(true);

        };
        $schoolyear = SchoolYear::find($id);
        $global_weeks = $schoolyear->global_weeks;
        $maxStartDate = $global_weeks->max('start_week_date');
        return view('schoolyears.show',['schoolyear'=>$schoolyear,'global_weeks'=> $global_weeks , 'maxstartdate' => $maxStartDate ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
