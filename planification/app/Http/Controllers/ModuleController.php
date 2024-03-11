<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Module;
use Yajra\DataTables\DataTables;

class ModuleController extends Controller
{
    public function index(Request $request)
    {


        if ($request->ajax()) {
            $modules = Module::select('*')->with('department');

            return Datatables::of($modules)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/modules/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        
        $modules = Module::select('*')->with('department');

        return view('modules.index', ['modules' => $modules]);
    }
    public function create()
    {}
    public function store()
    {}
    public function show()
    {}
    public function update()
    {}
    public function updatepage()
    {}
    public function delete()
    {}
}