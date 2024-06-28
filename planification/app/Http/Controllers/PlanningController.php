<?php

namespace App\Http\Controllers;
use App\Models\Absence;
use App\Models\Battalion;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Session;
use App\Models\Company;
use App\Models\Week;
use App\Models\Config;
use App\Models\Timing;

use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function table($battalion_id,$week_id)
    {
        $battalion = Battalion::find($battalion_id);
        $week = Week::find($week_id);
        $sessions = Session::where('week_id',$week_id)->get();
        // $modules = Module::where('battalion_id',$battalion->id)->get();
        $timings = Timing::all();
        $schoolyear_id = Config::find(1)->schoolyear_id;
        return view('plannings.3em.create', compact('battalion', 'week','timings','sessions','schoolyear_id'));
    }

}