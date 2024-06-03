<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Additive;
use App\Models\CatchUp;
use App\Models\Module;
use App\Models\Rectification;
use App\Models\Teacher;
use App\Models\Timing;
use App\Models\Week;
use Illuminate\Http\Request;

class AdditiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function total_view($id)
    {
        $additive = Additive::with('rectifications','catchups','additionals')->find($id);
        return view('additives.total_view',['additive' => $additive]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function teachers($modules,$schoolyear_id)
    {
        $ALLmodules = collect($modules)->flatten()->all();
        $teachers = Teacher::join('teachers_modules', 'teachers.id', '=', 'teachers_modules.teacher_id')
            ->whereIn('teachers_modules.module_id', $ALLmodules)
            ->where('teachers_modules.schoolyear_id', '=', $schoolyear_id)
            ->get();

        return $teachers;
    }
    public function show($id)
    {
        $additive  = Additive::with('rectifications','additionals','catchups')->find($id);
        $week_id = $additive->week_id;
        $week = Week::with('global_week','sessions','absences')->find($week_id);
        $battalion = Week::find($week->id)->battalion;
        $timings = Timing::all();
        $rectifications = Rectification::with('session','room','timing')->where('additive_id',$additive->id)->get();
        $additionals = Additional::with('sections','companies')->where('additive_id',$additive->id)->get();
        $catchups = CatchUp::with('session')->where('additive_id',$additive->id)->get();
        $modules = Module::where('battalion',$battalion->battalion)->get();
        $ALLmodules = $modules->pluck('id')->toArray();
        $teachers = Teacher::join('teachers_modules', 'teachers.id', '=', 'teachers_modules.teacher_id')
            ->where('teachers_modules.schoolyear_id', $battalion->schoolyear_id)
            ->whereIn('teachers_modules.module_id', $ALLmodules)
            ->get();
        return view('additives.show',[
                    'week' => $week,
                    'battalion'=> $battalion,
                    'timings' => $timings,
                    'additive' => $additive, 
                    'rectifications' => $rectifications,
                    'additionals' => $additionals,
                    'catchups'=>$catchups,
                    'modules'=>$modules,
                    'teachers'=>$teachers,
                ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Additive $additive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Additive $additive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Additive::destroy($id);
        return redirect()->back();
    }
}
