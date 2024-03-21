<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SessionController extends Controller
{

    public function index()
    {
    }
    public function create(Request $request)
    {
        $session = new Session();
        $session->session_date = $request->input('session_date');
        $session->timing_id = $request->input('timing_id');
        $session->week_id = $request->input('week_id');
        $session->sessionable_type = $request->input('sessionable_type');
        $session->sessionable_id = $request->input('sessionable_id');
        $session->session_type = $request->input('session_type');
        $session->module_id = $request->input('module_id');
        $session->teacher_id = $request->input('teacher_id');
        $session->room_id = $request->input('room_id');
        $session->save();  
        $session->load('teacher', 'module', 'room');
        return response()->json($session, 201);
    }
    public function store(Request $request)
    {
        $session = new Session;
        $session->room_id = $request->room_id;
        $session->teacher_id = $request->teacher_id;
        $session->module_id = $request->module_id;
        $session->session_type = $request->session_type;
        $session->sessionable_type = $request->sessionable_type;
        $session->sessionable_id = $request->sessionable_id;
        $session->session_date = $request->date;
        $session->timing_id = $request->timing_id;
        $session->week_id = $request->week_id;
        $session->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $session = Session::find($id);
        return $session;
    }
    public function update(Request $request)
    {

    }
    public function updatepage()
    {
    }
    public function delete($id)
    {
        Session::destroy($id);
        return redirect()->back();
    }
    public function mark_absence($id){
        $session = Session::where('id',$id)->first();
        $session->absented = true;
        $session->save();
        $absence =new  Absence;
        $absence->absenceable_type = 'App\\Models\\Session';
        $absence->absenceable_id = $id;
        $absence->reason = 'Absent';
        $absence->save();
        return redirect()->back();
    }
}
