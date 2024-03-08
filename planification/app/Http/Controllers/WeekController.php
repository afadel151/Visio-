<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Week;
use App\Models\Session;
use App\Models\Timing;
use App\Models\Battalion;
use App\Models\Room;

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

        $week = Week::find($id);
        $battalion_id = $week->battalion_id;
        $battalion  = Battalion::find($battalion_id);
        $sessions = Session::where('week_id',$week->id)->get();
        // $modules = Module::where('battalion_id',$battalion->id)->get();
        $timings = Timing::all();
        $rooms = Room::all();
        return view('weeks.create', compact('battalion', 'week','timings','sessions','rooms'));
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
