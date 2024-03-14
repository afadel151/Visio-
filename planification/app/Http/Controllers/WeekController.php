<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Week;
use App\Models\Session;
use App\Models\Timing;
use App\Models\Battalion;
use App\Models\Room;
use Yajra\DataTables\DataTables;


class WeekController extends Controller
{

    public function index()
    {
    }
    public function create()
    {

    }
    public function store()
    {
    }
    public function show($id)
    {

        $week = Week::find($id);
        $battalion_id = $week->battalion_id;
        $battalion = Battalion::find($battalion_id);
        $sessions = Session::with('teacher','module','room')->where('week_id', $week->id)->get();
        $timings = Timing::all();
        $rooms = Room::all();
        return view('weeks.create', compact('battalion', 'week', 'timings', 'sessions', 'rooms'));
    }
    public function BattalionWeeks($id, Request $request)
    {
        if ($request->ajax()) {
            $weeks = Week::where('battalion_id', $id)->get();
            if ($weeks) {
                return DataTables::of($weeks)
                    ->addColumn('start_date', function ($row) {
                        $stdate = $row->global_week->start_week_date;
                        return $stdate;
                    })
                    ->addColumn('end_date', function ($row) {
                        $stdate = $row->global_week->start_week_date;
                        $enddate = date('Y-m-d', strtotime('+7 days', strtotime($stdate)));
                        return $enddate;
                    })
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="/weeks/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                        // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                        // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                        return '<div class="flex justify-around items-center">' . $btn . '</div>';
                    })
                    ->make(true);
            }else{
                return 'no weeks';
            }

        }
    }
    public function update()
    {
    }
    public function updatepage()
    {
    }
    public function delete()
    {
    }
}
