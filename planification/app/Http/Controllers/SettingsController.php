<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\GlobalWeek;
use App\Models\Module;
use App\Models\SchoolYear;
use App\Models\Config;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        return view('settings.index');
    }
    public function schoolyears()
    {

        $schoolyears = SchoolYear::all();
        return view('settings.schoolyears', ['schoolyears' => $schoolyears]);
    }
    public function teachers()
    {
        $departments = Department::all();
        $teachers = Teacher::select('*')->with('department');
        return view('settings.teachers', ['departments' => $departments, 'teachers' => $teachers]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function config()
    {
        $config = Config::with('global_week', 'schoolyear')->find(1);
        $schoolyears = SchoolYear::with('global_weeks')->get();
        // $global_weeks = SchoolYear::find(Config::find(1)->current_schoolyear_id)->global_weeks;
        return view('settings.config', ['config' => $config, 'schoolyears' => $schoolyears]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update_config(Request $request)
    {
        $schoolyear_id = $request->input("schoolyear_id");
        $global_week_id = $request->input("global_week_id");
        if (Config::find(1)->current_schoolyear_id != $schoolyear_id) {
            Config::find(1)->update([
                'current_schoolyear_id' => $schoolyear_id
            ]);
            $default_global_week_id = SchoolYear::find($schoolyear_id)->global_weeks->first()->id;
            $global_week = GlobalWeek::find($default_global_week_id);
            if ($global_week != null) {
                Config::find(1)->update([
                    'current_schoolyear_id' => $schoolyear_id
                ]);
            }
        }
        if (Config::find(1)->current_global_week_id != $global_week_id) {
            Config::find(1)->update([
                'current_global_week_id' => $global_week_id
            ]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function modules(Request $request)
    {
        if ($request->ajax()) {
            $modules = Module::with('department')->get();
            return DataTables::of($modules)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="/modules/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    $btn .= '<a href="javascript:void(0)" class="edit btn btn-waring btn-sm rounded-lg">Delete</a>';
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $modules = Module::with('department')->get();
        return view('settings.modules',['modules' => $modules]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
