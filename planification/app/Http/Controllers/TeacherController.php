<?php

namespace App\Http\Controllers;
use App\Models\Absence;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Company;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;
use App\DataTables\TeacherDataTable;
class TeacherController extends Controller
{
    

    public function index(TeacherDataTable $dataTable)
    {
        return $dataTable->render('teachers.index');
    }
    // public function index()
    // {
    //     return view('teachers.index');
    // }
    
    public function create()
    {
        // $teachers = Teacher::with('department','sessions','Cours_S1','Cours_S2');
                       
        // return Datatables::of($teachers)
                          
        //                   ->editColumn('department', function($teacher)
        //                   {
        //                      return $teacher->department->department;
        //                   })
        //                   ->editColumn('sessions', function($teacher)
        //                   {
        //                      return $teacher->sessions->count();
        //                   })
        //                   ->editColumn('Cours_S1', function($teacher)
        //                   {
        //                      return $teacher->Cours_S1->count();
        //                   })
        //                   ->editColumn('Cours_S2', function($teacher)
        //                   {
        //                      return $teacher->Cours_S2->count();
        //                   })
        //                   ->make(true);
        //     // return  view('teachers.index', ['dataTable' => $dataTable]);
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
