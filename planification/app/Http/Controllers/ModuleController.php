<?php

namespace App\Http\Controllers;


use App\Models\GlobalWeek;
use App\Models\SchoolYear;
use App\Models\SchoolyearModule;
use App\Models\Session;
use App\Models\Teacher;
use App\Models\Week;

use Illuminate\Http\Request;

use App\Models\Module;
use App\Models\Config;
use Yajra\DataTables\DataTables;

class ModuleController extends Controller
{
    public function index(Request $request)
    {


        if ($request->ajax()) {
            $modules = SchoolyearModule::with('module','battalion')->where('schoolyear_id',Config::find(1)->current_schoolyear_id)->get();
            return Datatables::of($modules)
                ->addIndexColumn()
                ->addColumn('department', function ($row) {
                    return $row->department->department;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/modules/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        $schoolyear_id = Config::find(1)->schoolyear_id;
        $modules = Module::select('*')->with('department');

        return view('modules.index', ['modules' => $modules, 'schoolyear_id' => $schoolyear_id]);
    }
    public function module_absences($id, Request $request)
    {
        if ($request->ajax()) { 
            $Absences = Session::with('timing','teacher','TpTeachers','room', 'sessionable')->where(
                function ($query) use ($id){
                    $query->where('module_id',$id)
                            ->where('absented',1);
                }
            )->orderByDesc('session_date')->get();
            return DataTables::of($Absences)
            ->addColumn('teacher(s)', function ($row){
                if ($row->session_type !== 'tp') {
                    return $row->teacher->teacher_name;
                }
                else {
                    $result = '';
                    foreach ($row->TpTeachers as $teacher) {
                        $result = $result . ', '.$teacher->teacher_name;
                    }
                    return $result;
                }
            })
            ->addColumn('schoolyear',function($row){
                $week = Week::find($row->week_id);
                $GlobalWeek= GlobalWeek::find($week->global_week_id);
                $Schoolyear = SchoolYear::find($GlobalWeek->schoolyear_id);
                return $Schoolyear->schoolyear;

            })
            ->addColumn('caughtup', function ($row) {
                if ($row->caughtup == true) {
                    return '<div class="h-4 w-8 bg-green-400 rounded-lg">OUI</div>';
                } else {
                    return '<div class="h-4 w-8 bg-red-400 rounded-lg">NON</div>';
                }
            })
            ->addColumn('students', function ($row) {
                if ($row->sessionable_type  === 'App\\Models\\Company') {
                    return 'Company :' . $row->sessionable->company . $row->sessionable->battalion->battalion ;
                } else {
                    return 'Section :'. $row->sessionable->section;
                }
            })
            ->rawColumns(['caughtup'])
            ->make(true);
        }
    }
    public function store()
    {
    }
    public function show($id, Request $request)
    {
        if ($request->ajax()) {
            $module = Module::find($id);
            $teachers = Module::join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')->where('modules.id', $module->id)->join('departments', 'modules.department_id', '=', 'departments.id')
                ->join('schoolyear_modules', 'modules.id', '=', 'schoolyear_modules.module_id')
                ->join('battalions','schoolyear_modules.battalion_id','=','battalions.id')
                ->get();

            return Datatables::of($teachers)
                ->addIndexColumn()
                ->addColumn('teacher', function ($row) {
                    return Teacher::find($row->teacher_id)->teacher_name;
                })
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
        $module = Module::find($id);

        $teachers = Module::join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')->where('module_id', $module->id)->join('departments', 'modules.department_id', '=', 'departments.id')
            ->get();
        $allmodules = Module::all();
        $schoolyears = SchoolYear::all();

        return view('modules.show', ['teachers' => $teachers, 'module' => $module, 'id' => $id]);

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