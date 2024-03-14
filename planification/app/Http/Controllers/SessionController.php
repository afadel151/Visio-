<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function index()
    {
    }
    public function create()
    {
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
    public function show()
    {
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
}
