<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    //
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
