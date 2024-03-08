<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Company;
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
        $teachers = Teacher::select('*')->with('department');
        $rooms = Room::select('*');

        return view('teachers.index', ['teachers' => $teachers, 'rooms' => $rooms]);
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
            if ($request->has('search') && !empty($request->input('search')['value'])) {
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

        return view('teachers.show', ['modules' => $modules, 'teacher' => $teacher]);
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

        return view('teachers.show', ['modules' => $modules, 'teacher' => $teacher]);

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
