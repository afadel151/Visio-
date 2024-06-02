<?php

namespace App\Http\Controllers;

use App\Models\Absence;
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
        
        $absence = Absence::where('absenceable_id', $session_id)->where('absenceable_type','App\\Models\\Session')->first();
        $absence->caughtup = 1;
        $absence->update();
        \Log::info('Absence'.$absence);
        $catchup = new CatchUp();
        $catchup->room_id = $room_id;
        $catchup->catchup_date = $date;
        $catchup->absence_id = $absence->id;
        $catchup->timing_id = $timing_id;
        $catchup->additive_id = $request->additive_id;

        $catchup->save();
        \Log::info($catchup);
        $catchup->load('absence','room','timing');
        return response()->json($catchup);
    }
    public function index()
    {
        $absences = Absence::all();
        // return view
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
