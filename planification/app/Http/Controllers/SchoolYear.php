<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolYear extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolyears = \App\Models\SchoolYear::all();
        return view('schoolyears.index',['schoolyears'=>$schoolyears]);
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
    public function show(string $id)
    {
        $schoolyear = \App\Models\SchoolYear::find($id);
        return view('schoolyears.show',['schoolyear'=>$schoolyear]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
