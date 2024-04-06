<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\SchoolYear;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Module;
use App\Models\Config;
use Yajra\DataTables\DataTables;

class ModuleController extends Controller
{
    public function index(Request $request)
    {


        if ($request->ajax()) {
            $modules = Module::select('*')->with('department');

            return Datatables::of($modules)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/modules/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        $schoolyear_id = Config::find(1)->schoolyear_id;
        $modules = Module::select('*')->with('department');

        return view('modules.index', ['modules' => $modules, 'schoolyear_id' => $schoolyear_id]);
    }
    public function create()
    {
    }
    public function store()
    {
    }
    public function show($id, Request $request)
    {
        if ($request->ajax()) {
            $module = Module::find($id);
            $teachers = Module::join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')->where('module_id', $module->id)->join('departments', 'modules.department_id', '=', 'departments.id')
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
       
        return view('modules.show', ['teachers' => $teachers,'module' => $module, 'id' => $id]);

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