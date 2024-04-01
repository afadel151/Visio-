<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Rectification;
use App\Models\Session;
use App\Models\TpTeacher;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SessionController extends Controller
{
    public function get_absences(Request $request)
    {
        $timing_id =  $request->input('timing_id');
        $date = $request->input('session_date');
        $week_id = $request->input('week_id');
        $absences = Session::with('room','teacher','timing','sessionable','module')
                    ->where('session_date',$date)
                    ->where('timing_id',$timing_id)
                    ->where('week_id',$week_id)
                    ->where('absented',1)
                    ->where('rectified',0)
                    ->get();

        return response()->json($absences);

    }
    public function get_session_class(Request $request){
        $session = Session::find($request->input('session_id'));
        return $session->class();
    }
    public function store_rectification(Request $request)
    {
        $session = Session::find($request->input('session_id'));
        $rectification = new Rectification;
        $rectification->session_id = $session->id;
        $rectification->room_id = $request->input('room_id');
        $rectification->timing_id  = $request->input('timing_id');
        $rectification->additive_id = $request->input('additive_id');
        $session->rectified = true;
        $session->save();
        $rectification->save();
        
    }

    public function create(Request $request)
    {
        $session = new Session();
        // $session->session_date = $request->query('session_date');
        // $session->timing_id = $request->query('timing_id');
        // $session->week_id = $request->query('week_id');
        // $session->sessionable_type = $request->query('sessionable_type');
        // $session->sessionable_id = $request->query('sessionable_id');
        // $session->session_type = $request->query('session_type');
        // $session->module_id = $request->query('module_id');
        // $session->teacher_id = $request->query('teacher_id');
        // $session->room_id = $request->query('room_id');
        // $session->save();  
        $session = Session::create($request->all());
        // $session->load('teacher', 'module', 'room');
        $session->load('teacher', 'module', 'room');
        return response()->json($session, 201);
    }
//
    public function create_tp(Request $request)
    {
        $session = new Session();
        $session->session_date = $request->query('session_date');
        $session->timing_id = $request->query('timing_id');
        $session->week_id = $request->query('week_id');
        $session->sessionable_type = $request->query('sessionable_type');
        $session->sessionable_id = $request->query('sessionable_id');
        $session->session_type = 'tp';
        $session->module_id = $request->query('module_id');
        $session->teacher_id = 1;
        $session->room_id = $request->query('room_id');
        $session->save(); 
        $teachers_Ids = $request->query('teachers');
        foreach ($teachers_Ids as $teacherId) 
        {
            
            $tp_teacher = new TpTeacher;
            $tp_teacher->session_id = $session->id;
            $tp_teacher->teacher_id = $teacherId;
            $tp_teacher->save();
        } 
        $session->load('module', 'room','TpTeachers');

        return response()->json($session);
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
    //    ,
    public function get_to_rectify(Request $request)
    {
        \Log::info('Request Parameters - session_date: ' . $request->query('session_date') . ', timing_id: ' .$request->query('timing_id') );
        $sessions = Session::where('session_date',$request->query('session_date'))
                    ->where('timing_id',$request->query('timing_id'))
                    ->where('week_id',$request->query('week_id'))
                    ->with('teacher','module','room','sessionable')
                    ->get();
        // \Log::info('Request Parameters - sessions :' .$sessions);
        
        return $sessions;
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
        // return redirect()->back();
    }
}
