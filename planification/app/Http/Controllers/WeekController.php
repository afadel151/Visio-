<?php

namespace App\Http\Controllers;

use App\Models\Additive;
<<<<<<< Updated upstream
=======
use App\Models\Company;
use App\Models\Exam;
use App\Models\ExamRoomGroup;
use App\Models\Module;
use App\Models\Teacher;
use App\Models\TeacherModule;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use App\Models\Week;
use App\Models\Session;
use App\Models\Timing;
use App\Models\Battalion;
use App\Models\Room;
use Inertia\Inertia;
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

<<<<<<< Updated upstream
        $week = Week::find($id);
        $battalion_id = $week->battalion_id;
        $battalion = Battalion::find($battalion_id);
        $sessions = Session::with('teacher', 'module', 'room')->where('week_id', $week->id)->get();
        $timings = Timing::all();
        $rooms = Room::all();
        return view('weeks.create', compact('battalion', 'week', 'timings', 'sessions', 'rooms'));
=======
        $week = Week::with('global_week')->find($id);
        if ($week->week_type == 'Cours' || $week->week_type == 'Cours Magistreaux') {
           
            $battalion = Battalion::find($week->battalion_id);
            $modules = Module::with('teachers')->where('battalion',$battalion->battalion)->where('semester',$week->semester)->get();
            $companies = Company::with('sections')->where('battalion_id',$battalion->id)->get();
            $sessions = Session::with('teacher', 'module', 'room', 'rectification')->where('week_id', $week->id)->get();
            $timings = Timing::all();
            $rooms = Room::all();
            // return view('weeks.create', compact('battalion', 'week', 'timings', 'sessions', 'rooms'));
            return Inertia::render('WeekShow',[
                'battalion' => $battalion,
                'week' => $week,
                'timings' => $timings,
                'sessions' => $sessions,
                'rooms' => $rooms,
                'companies' => $companies,
                'modules' => $modules,
            ]);
        }
        if ($week->week_type == 'Examens') {
            $battalion = Battalion::find($week->battalion_id);
            $modules = Module::where('battalion', $battalion->battalion)->get();
            $exams = Exam::where('week_id', $week->id)
                ->get();
            $exams_dates = Exam::where('week_id', $week->id)
                ->groupBy('exam_date')
                ->orderBy('exam_date', 'asc')
                ->get('exam_date');

            $OccupiedRooms = ExamRoomGroup::where('week_id', $week->id)->pluck('room_id')->toArray();
            $AvailableRooms = Room::whereNotIn('id', $OccupiedRooms)->get();
            return view('exams.show', [
                'battalion' => $battalion,
                'week' => $week,
                'modules' => $modules,
                'exams' => $exams,
                'exams_dates' => $exams_dates,
                'rooms' => $AvailableRooms,
            ]);
        }
>>>>>>> Stashed changes
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
            } else {
                return 'no weeks';
            }

        }
    }
    public function additives($id, Request $request)
    {
        if ($request->ajax()) {
            $week = Week::find($id);
            $additives = $week->additives;
            if ($additives) {
                return DataTables::of($additives)
                    ->addColumn('number', function ($row) {
                        return $row->additive_number;
                    })
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="/additives/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                        $btn = $btn . '<a href="/additives/delete/'.$row->id.'" class="edit btn btn-danger btn-sm rounded-lg">delete</a>';
                        // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                        return '<div class="flex justify-around items-center">' . $btn . '</div>';
                    })
                    ->make(true);
            } else {
                return 'no additives';
            }

        }
        $week = Week::find($id);
        $additives = $week->additives;
        return view('weeks.additives',['additives' => $additives, 'week'=> $week] );
    }

    public function update()
    {
    }
    public function updatepage()
    {
    }

    public function additives_add($id){
        $week = Week::find($id);
        $additivesNb = $week->additives->count();
        $additive = new Additive;
        $additive->additive_number = $additivesNb + 1;
        $additive->week_id = $week->id;
        $additive->save();
        return back();
    }
    public function delete()
    {
    }
}
