<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\SchoolYear;
use App\Models\Config;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
    
        return view('settings.index');
    }
    public function schoolyears()
    {
        
        $schoolyears  = SchoolYear::all();
        return view('settings.schoolyears',['schoolyears'=>$schoolyears ]);
    }
    public function teachers(){
        $departments = Department::all();
        $teachers = Teacher::select('*')->with('department');
        return view('settings.teachers' ,['departments'=>$departments, 'teachers'=>$teachers]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
