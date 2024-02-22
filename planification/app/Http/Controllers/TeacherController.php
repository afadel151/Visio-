<?php

namespace App\Http\Controllers;
use App\Models\Absence;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Company;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    

    public function index()
    {
        $teachers = Teacher::all();
                        // ->with('modules','absences','department');
                                
        return view('teachers.inedx',['teachers'=> $teachers]);
    }
    public function create()
    {

    }
    public function store()
    {}
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show',['teacher'=>$teacher]);
    }
    public function update()
    {}
    public function updatepage()
    {}
    public function delete()
    {}
}
