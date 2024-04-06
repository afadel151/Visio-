<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\SchoolYear;
use App\Models\Session;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Company;
use App\Models\Section;
use App\Models\TeacherModule;
use App\Models\Timing;
use App\Models\Config;
use App\Models\Room;
use App\Models\TpTeacher;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{



    public function classes($id, Request $request)
    {
        $teacher = Teacher::find($id);
        $classes = new \stdClass;
        $sessions = Session::whereDate('session_date', '>=', $request->min_date)
                            ->whereDate('session_date', '<=', $request->max_date)
                            ->get();
        $classes->CoursDones = $sessions->where('teacher_id', $teacher->id)->where('session_type', 'cour')->where('absented', 0)->count();
        $classes->CoursAbsented = $sessions->where('teacher_id', $teacher->id)->where('session_type', 'cour')->where('absented', 1)->where('caughtup', 0)->count();
        $classes->CoursCaughtUp = $sessions->where('teacher_id', $teacher->id)->where('session_type', 'cour')->where('caughtup', 1)->count();

        $classes->TdsDones = $sessions->where('teacher_id', $teacher->id)->where('session_type', 'td')->where('absented', 0)->count();
        $classes->TdsAbsented = $sessions->where('teacher_id', $teacher->id)->where('session_type', 'td')->where('absented', 1)->where('caughtup', 0)->count();
        $classes->TdsCaughtUp = $sessions->where('teacher_id', $teacher->id)->where('session_type', 'td')->where('caughtup', 1)->count();
        $Tps = Session::where('session_type', 'tp')
                        ->whereDate('session_date', '>=', $request->min_date)
                        ->whereDate('session_date', '<=', $request->max_date)
                        ->join('tp_teachers', 'sessions_table.id', '=', 'tp_teachers.session_id')
                        ->where('tp_teachers.teacher_id', $teacher->id);

        $classes->TpsDones = $Tps->where('sessions_table.absented',0)->count();
        $classes->TpsAbsented = $Tps->where('sessions_table.absented',1)->where('caughtup',0)->count();
        $classes->TpsCaughtUp = $Tps->where('sessions_table.absented',1)->where('caughtup',1)->count();
        $additionals = Additional::whereDate('additional_date', '>=', $request->min_date)
                                    ->whereDate('additional_date', '<=', $request->max_date)
                                    ->where('teacher_id', $teacher->id)->get();

        $classes->AdditionalsDones = $additionals->where('absented',0)->count();
        $classes->AdditionalsAbsented = $additionals->where('absented',1)->count();

        return $classes;
    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $teachers = Teacher::select('*')->with('department');

            return Datatables::of($teachers)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/teachers/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->addColumn('absences', function ($row) {
                    return $row->SessionsAbsences->count();
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        ;
        $absences = Session::where('teacher_id', 72)->where('absented', 1)->get();
        $teachers = Teacher::select('*')->with('department');
        $schoolyear_id = Config::find(1)->schoolyear_id;
        return view('teachers.index', ['teachers' => $teachers, 'schoolyear_id' => $schoolyear_id, 'absences' => $absences]);
    }

    public function store()
    {
    }
    public function show($id, Request $request)
    {
        if ($request->ajax()) {
            $teacher = Teacher::find($id);
            $modules = Module::join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')->where('teacher_id', $teacher->id)->join('departments', 'modules.department_id', '=', 'departments.id')
                ->get();

            return Datatables::of($modules)
                ->addIndexColumn()
                ->addColumn('schoolyear', function ($row) {
                    return SchoolYear::find($row->schoolyear_id)->schoolyear;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    $btn .= '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        $teacher = Teacher::find($id);

        $modules = Module::join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')->where('teacher_id', $teacher->id)->join('departments', 'modules.department_id', '=', 'departments.id')
            ->get();
        $allmodules = Module::all();
        $schoolyears = SchoolYear::all();
        $schoolyear_id = 1;
        return view('teachers.show', ['modules' => $modules, 'schoolyears' => $schoolyears, 'allmodules' => $allmodules, 'teacher' => $teacher, 'schoolyear_id' => $schoolyear_id, 'id' => $id]);
    }

    public function showt(int $id, Request $request)
    {
        if ($request->ajax()) {
            $teacher = Teacher::find($id);
            $modules = DB::table('teachers_modules')
                ->select('*')
                ->join('modules', 'teachers_modules.module_id', '=', 'modules.id')
                ->where('teachers_modules.teacher_id', '=', $teacher->id)
                ->get();
            return Datatables::of($modules)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->addColumn('cours', function ($row) {
                    $cour = '<div class="h-4 w-8 bg-green-400 rounded-lg">OUI</div>';
                    $noncour = '<div class="h-4 w-8 bg-red-400 rounded-lg">NON</div>';
                    if ($row->cours == true) {
                        return $cour;
                    } else {
                        return $noncour;
                    }
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        ;
        $teacher = Teacher::join('departments', 'teachers.department_id', '=', 'departments.id')->where('teachers.id', $id)->first();
        $modules = DB::table('teachers_modules')
            ->select('*')
            ->join('modules', 'teachers_modules.module_id', '=', 'modules.id')
            ->where('teachers_modules.teacher_id', '=', $id)
            ->join('departments', 'modules.department_id', '=', 'departments.id')
            ->get();
        $schoolyear_id = Config::find(1)->schoolyear_id;

        return view('teachers.show', ['modules' => $modules, 'teacher' => $teacher, 'schoolyear_id' => $schoolyear_id]);

    }
    public function absences(int $id, Request $request)
    {
        if ($request->ajax()) {
            $absences = Session::where('teacher_id', $id)->where('absented', 1)->get();

            return Datatables::of($absences)
                ->addIndexColumn()
                ->addColumn('module', function ($row) {
                    return Module::find($row->module_id)->module;
                })
                ->addColumn('room', function ($row) {
                    return Room::find($row->room_id)->room;
                })
                ->addColumn('date', function ($row) {
                    return $row->session_date;
                })
                ->addColumn('time', function ($row) {
                    $timing = Timing::find($row->timing_id);
                    return date('H:i', strtotime($timing->session_start)) . '->' . date('H:i', strtotime($timing->session_finish));
                })
                ->addColumn('class', function ($row) {
                    if ($row->sessionable_type == 'App\\Models\\Company') {
                        $c = Company::find($row->sessionable_id);
                        return 'Company ' . $c->battalion->battalion . $c->company;
                    } elseif ($row->sessionable_type == 'App\\Models\\Section') {
                        $s = Section::find($row->sessionable_id);
                        return 'Section ' . $s->section;
                    }
                })
                ->addColumn('caughtupp', function ($row) {
                    if ($row->caughtup == true) {
                        return '<div class="h-4 w-8 bg-green-400 rounded-lg">OUI</div>';
                    } else {
                        return '<div class="h-4 w-8 bg-red-400 rounded-lg">NON</div>';
                    }
                })
                ->make(true);
        }


    }



    public function add_module($id, Request $request)
    {
        $module_id = $request->module_id;
        $teacher_module = new TeacherModule;
        $teacher_module->teacher_id = $id;
        $teacher_module->module_id = $module_id;
        $teacher_module->schoolyear_id = $request->schoolyear_id;
        if ($request->has('cour')) {
            $teacher_module->cours = 1;
        } else {
            $teacher_module->cours = 0;
        }
        if ($request->has('td')) {
            $teacher_module->td = 1;
        } else {
            $teacher_module->td = 0;
        }
        if ($request->has('tp')) {
            $teacher_module->tp = 1;
        } else {
            $teacher_module->tp = 0;
        }
        $teacher_module->save();
        return redirect()->back();
    }
    public function updatepage()
    {
    }
    public function delete()
    {
    }
}
