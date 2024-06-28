<?php

namespace App\Http\Controllers;

use App\Models\CatchUp;
use Illuminate\Http\Request;
use App\Models\Session;
class AbsenceController extends Controller
{
    //
    public function create_catchup(Request $request)
    {
        \Log::info('Request Data: ' . json_encode($request->all()));
        $session_id = $request->input('session_id');
        $timing_id = $request->input('timing_id');
        $date = $request->input('catchup_date');
        $room_id = $request->input('room_id');
        $session = Session::find($session_id);
        $session->caughtup = 1;
        $session->update();
        
        
        $catchup = new CatchUp();
        $catchup->room_id = $room_id;
        $catchup->catchup_date = $date;
        $catchup->session_id = $session_id;
        $catchup->timing_id = $timing_id;
        $catchup->additive_id = $request->additive_id;

        $catchup->save();
        \Log::info($catchup);
        $catchup->load('session','room','timing');
        return response()->json($catchup);
    }
    

    //if i use javascript to create an absence the ill not need this function 
    public function create()
    {
        
    }
    public function store()
    {
        //Absence::create(...)
    }
    // public function show()
    // {

    // }
    public function update()
    {
    }
    public function updatepage()
    {

    }
    public function delete()
    {
        //could be done with react 
    }
}
