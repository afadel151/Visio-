<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Company;
use App\Models\Section;
use App\Models\Timing;
use App\Models\Config;
use App\Models\Room;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;
use App\DataTables\TeacherDataTable;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{


    // public function index(TeacherDataTable $dataTable)
    // {
    //     // return $dataTable
    //     // ->render('teachers.index');

    // }
    public function index(Request $request)
    {


        if ($request->ajax()) {
            $teachers = Teacher::select('*')->with('department');

            return Datatables::of($teachers)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/teachers/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })

                ->rawColumns(['action'])
                ->make(true);

        }
        ;
        $absences = Session::where('teacher_id',72)->where('absented', 1)->get();
        $teachers = Teacher::select('*')->with('department');
        $schoolyear_id = Config::find(1)->schoolyear_id;
        return view('teachers.index', ['teachers' => $teachers, 'schoolyear_id' => $schoolyear_id, 'absences' => $absences]);
    }

    public function store()
    {
    }
    public function show(int $id, Request $request)
    {
        if ($request->ajax()) {
            $teacher = Teacher::find($id);
            $query = DB::table('teachers_modules')
                ->select('*')
                ->join('modules', 'teachers_modules.module_id', '=', 'modules.id')
                ->where('teachers_modules.teacher_id', '=', $teacher->id);

            // Handle search query
            if ($request->has('search') && !empty ($request->input('search')['value'])) {
                $searchValue = $request->input('search')['value'];
                $query->where(function ($query) use ($searchValue) {
                    $query->where('modules.module', 'like', '%' . $searchValue . '%')
                        ->orWhere('modules.semester', 'like', '%' . $searchValue . '%')
                        ->orWhere('departments.department', 'like', '%' . $searchValue . '%');
                });
            }

            $modules = $query->join('departments', 'modules.department_id', '=', 'departments.id')
                ->get();

            return Datatables::of($modules)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    $btn .= '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

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

    public function showt(int $id, Request $request)
    {
        if ($request->ajax()) {
            $teacher = Teacher::find($id);
            // $modules = DB::table('teachers_modules')->select('*')->join('modules','teachers_modules.module_id','=','modules.id')->where('teacher_id',$id)->get();
            // $modules = DB::table('teachers_modules')
            //     ->select('*')
            //     ->join('modules', 'teachers_modules.module_id', '=', 'modules.id')
            //     ->where('teachers_modules.teacher_id', '=', $id)
            //     ->get();
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
        // $modules = DB::table('teachers_modules')->select(['module_id', 'module', 'semester', 'departement_id', 'cours'])->join('modules', 'teachers_modules.module_id', '=', 'modules.id')->where('teacher_id', $id);
        $modules = DB::table('teachers_modules')
            ->select('*')
            // ->select(
            //     'teachers_modules.cours as cours',
            //     'teachers_modules.td as td',
            //     'teachers_modules.tp as tp',
            //     'teachers_modules.module_id as id',
            //     'modules.module as module',
            //     'modules.semester as semester',
            //     'modules.department_id as department_id',
            // )
            ->join('modules', 'teachers_modules.module_id', '=', 'modules.id')
            ->where('teachers_modules.teacher_id', '=', $id)
            ->join('departments', 'modules.department_id', '=', 'departments.id')
            ->get();
        $schoolyear_id = Config::find(1)->schoolyear_id;
        
        return view('teachers.show', ['modules' => $modules, 'teacher' => $teacher, 'schoolyear_id' => $schoolyear_id]);

    }
    public function absences($id, Request $request)
    {
        $absences = Session::where('teacher_id', $id)->where('absented', 1)->get();

        if ($request->ajax()) {
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
                    return $timing->session_start + $timing->session_end;
                })
                ->addColumn('class', function ($row) {
                    if ($row->sessionable_type = 'App\\Models\\Company') {
                        $c = Company::find($row->sessionable_id);
                        return 'Company' + $c->company;
                    } elseif ($row->sessionable_type = 'App\\Models\\Section') {
                        $s = Section::find($row->sessionable_id);
                        return 'Section' + $s->section;
                    }
                })
                ->addColumn('caughtup', function ($row) {
                    if ($row->caughtup == true) {
                        return '<div class="h-4 w-8 bg-green-400 rounded-lg">OUI</div>';
                    } else {
                        return '<div class="h-4 w-8 bg-red-400 rounded-lg">NON</div>';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    $btn .= '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);
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
