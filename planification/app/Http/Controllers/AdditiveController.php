<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Additive;
use App\Models\CatchUp;
use App\Models\Rectification;
use App\Models\Timing;
use App\Models\Week;
use Illuminate\Http\Request;

class AdditiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        $additive  = Additive::with('rectifications','additionals','catchups')->find($id);
        $week_id = $additive->week_id;
        $week = Week::with('global_week','sessions','absences')->find($week_id);
        $battalion = Week::find($week->id)->battalion;
        $timings = Timing::all();
        // $rectification = Rectification::where('additive_id',$additive->id)->get();
        // $additionals = Additional::where('additive_id',$additive->id)->get();
        // $catchups = CatchUp::where('additive_id',$additive->id)->get();
        return view('additives.show',[

                    'week' => $week,
                    'battalion'=> $battalion,
                    'timings' => $timings,
                    'additive' => $additive, 
                    // 'rectifications' => $rectification,
                    // 'additionals' => $additionals,
                    // 'catchups'=>$catchups,
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
