<?php

namespace App\Http\Controllers;

use App\Models\ExamRoomGroup;
use Illuminate\Http\Request;

class ExamRoomController extends Controller
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
        $WeekId = $request->week_id;
        $GroupName = $request->group_name;
        $RoomId = $request->room_id;
        $ExamRoomGroup = new ExamRoomGroup();
        $ExamRoomGroup->week_id = $WeekId;
        $ExamRoomGroup->group = $GroupName;
        $ExamRoomGroup->room_id = $RoomId;
        $ExamRoomGroup->sector = $request->sector;

        $ExamRoomGroup->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamRoomGroup $examRoomExamRoomGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExamRoomGroup $examRoomExamRoomGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExamRoomGroup $examRoomExamRoomGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamRoomGroup $examRoomExamRoomGroup)
    {
        //
    }
}
