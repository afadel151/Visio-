<?php

namespace App\Http\Controllers;

use App\Models\Battalion;
use App\Models\Config;
use App\Models\GlobalWeek;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Yajra\DataTables\DataTables;
use App\Models\SchoolYear;
use App\Models\Week;
use Ramsey\Uuid\Type;
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
        $b1 = new Battalion;
        $b1->battalion = 1;

        $b2 = new Battalion;
        $b2->battalion = 2;

        $b3 = new Battalion;
        $b3->battalion = 3;

        $schoolyear->schoolyear = $request->input('schoolyear');
        $schoolyear->schoolyear_start_date = $request->input('schoolyear_start_date');
        $schoolyear->save();

        $b1->schoolyear_id = $schoolyear->id;
        $b2->schoolyear_id = $schoolyear->id;
        $b3->schoolyear_id = $schoolyear->id;

        $b1->save();
        $b2->save();
        $b3->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
 
    public function showw($id,Request $request)
    {

        if ($request->ajax()) {
            $schoolyear = SchoolYear::where('id',$id)->first();
            $global_weeks = $schoolyear->global_weeks;
            return Datatables::of($global_weeks)
             
                ->addColumn('battalion_1', function ($global_week) {
                    $week = new Week();
                    $week = $global_week->weeks->first(function ($week) {
                        return $week->battalion->battalion == 1;
                    });
                
                    return  $week ? $week : 'Empty' ;
                    
                })
                ->addColumn('battalion_2', function ($row) {
                    $week = new Week();
                    $week = $row->weeks->first(function ($week) {
                        return $week->battalion->battalion == 2;
                    });
                
                    return $week ? $week : 'Empty';
                })
                ->addColumn('battalion_3', function ($global_week) {
                    $week = new Week();
                    $week = $global_week->weeks->first(function ($week) {
                        return $week->battalion->battalion == 3;
                    });
                
                    return $week ? $week : 'Empty';
                })
                ->addColumn('events',function($global_week){
                    $events = '';
                    foreach ($global_week->events as $event) {
                        $events = $events . $event->event;
                    }
                    if ($events) {
                        return $events;
                    }
                    else {
                        return 'No Event';
                    }
                
                })
                ->addColumn('sport_events',function($global_week){
                    $sport_events = '';
                    foreach ($global_week->sport_events as $sport_event) {
                        $sport_events = $sport_events . $sport_event->sport_event;
                    }
                    if ($sport_events) {
                        return $sport_events;
                    }
                    else {
                        return 'No sport Event';
                    }
                
                })
                ->addColumn('action', function ($row) {
                    
                    $btn ='<a href="/global_week/' . $row->id . '" class="edit btn btn-primary btn-sm rounded-lg">View</a>' ;
                    $btn = $btn . '<a href="/global_weeks/createafter/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">New After this</a>' ;
                    $btn = $btn .'<a href="/global_weeks/delete/' . $row->id . '" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>' ;
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->make(true);

        };
        $schoolyear = SchoolYear::where('id',$id)->first();
        if ($schoolyear) {
            $global_weeks = $schoolyear->global_weeks;
            if ($global_weeks) {
                $maxStartDate = $global_weeks->max('start_week_date');
            }
            else {
                $maxStartDate = date('Y-m-d', strtotime('-7 days', strtotime($schoolyear->start_date))) ;
            }
            return view('schoolyears.show',['schoolyear'=>$schoolyear,'global_weeks'=> $global_weeks , 'maxstartdate' => $maxStartDate ,'schoolyear_id'=>$schoolyear->id]);
        }
        else {
            return 'there is no schoolyear for now';
        }
        
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
    public function currentSY()
    {
        $today = date('Y-m-d');
        // R == new Request
        $global_week = GlobalWeek::where('start_week_date','<=',$today)->where('end_week_date','>=',$today)->first();
        if ($global_week) {
            $schoolyear_id = (int) $global_week->schoolyear_id;
            dd($schoolyear_id);
            // return $this->show((int)$schoolyear_id,new Request);
        }
        else {
            return 'there is no global week this time';
        }
        
    }
}
