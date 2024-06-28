<?php

namespace App\Http\Controllers;

use App\Models\Control;
use App\Models\Room;
use App\Models\Session;
use App\Models\Timing;
use Illuminate\Http\Request;

class ControlsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function available_rooms(Request $request)
    {
        $date = $request->get('control_date');
        $company_id = $request->get('company_id');
        $timing_id = $request->get('timing_id');
        $week_id = $request->get('week_id');
        $OccupiedRoomsInSessions = Session::where('session_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        $OccupiedRoomsInControls = Control::where('control_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        $OccupiedRooms = array_merge($OccupiedRoomsInControls,$OccupiedRoomsInSessions);
        $AvailableRooms = Room::whereNotIn('id',$OccupiedRooms)->get();
        
        return response()->json($AvailableRooms);
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
        $date = $request->get('control_date');
        $company_id = $request->get('company_id');
        $timing_id = $request->get('timing_id');
        $module_id = $request->get('module_id');
        $room_id = $request->get('room_id');
        $week_id = $request->get('week_id');
        $teacher_id = $request->get('teacher_id');
        $control = new Control;
        $control->control_date = $date;
        $control->company_id = $company_id;
        $control->timing_id = $timing_id;
        $control->module_id = $module_id;
        $control->room_id = $room_id;
        $control->week_id = $week_id;
        $control->teacher_id = $teacher_id;
        $control->save();
        
        return response()->json($control);
    }

    /**
     * Display the specified resource.
     */
    public function show(Control $control)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Control $control)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Control $control)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Control::destroy($id);
        return redirect()->back();
    }
}
