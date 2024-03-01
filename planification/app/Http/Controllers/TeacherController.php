<?php

namespace App\Http\Controllers;
use App\Models\Absence;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Company;
use App\Models\Room;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;
use App\DataTables\TeacherDataTable;
class TeacherController extends Controller
{
    

    // public function index(TeacherDataTable $dataTable)
    // {
    //     // return $dataTable
    //     // ->render('teachers.index');
        
    // }
    public function index(Request $request)
    {
        
           
            if ($request->ajax()) {
                $teachers = Teacher::select('*')->with('department');
                
                return Datatables::of($teachers)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                            
                               $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                               $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                               $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
             
                                return '<div class="flex justify-around items-center">' . $btn . '</div>' ;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
                
            };
            $teachers = Teacher::select('*')->with('department');
            $rooms = Room::select('*');
        
        return view('teachers.index', ['teachers' => $teachers , 'rooms' => $rooms]);
    }   
    // public function index()
    // {
    //     return view('teachers.index');
    // }
    
    // public function create()
    // {
    //     // $teachers = Teacher::with('department','sessions','Cours_S1','Cours_S2');
                       
    //     // return Datatables::of($teachers)
                          
    //     //                   ->editColumn('department', function($teacher)
    //     //                   {
    //     //                      return $teacher->department->department;
    //     //                   })
    //     //                   ->editColumn('sessions', function($teacher)
    //     //                   {
    //     //                      return $teacher->sessions->count();
    //     //                   })
    //     //                   ->editColumn('Cours_S1', function($teacher)
    //     //                   {
    //     //                      return $teacher->Cours_S1->count();
    //     //                   })
    //     //                   ->editColumn('Cours_S2', function($teacher)
    //     //                   {
    //     //                      return $teacher->Cours_S2->count();
    //     //                   })
    //     //                   ->make(true);
    //     //     // return  view('teachers.index', ['dataTable' => $dataTable]);
    // }
    
    // public function store()
    // {}
    // public function show($id)
    // {
    //     $teacher = Teacher::find($id);
    //     return view('teachers.show',['teacher'=>$teacher]);
    // }
    // public function update()
    // {}
    // public function updatepage()
    // {}
    // public function delete()
    // {}
}
