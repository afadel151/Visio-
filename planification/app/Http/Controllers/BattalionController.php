<?php

namespace App\Http\Controllers;

use App\Models\Battalion;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class BattalionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    public function SY_battalions($id, Request $request)
    {
        if($request->ajax()){
            $battalions = Battalion::where('schoolyear_id',$id)->get();
            return DataTables::of($battalions)
            ->addColumn('action', function ($row) {

                $btn = '<a href="/battalions/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';

                return '<div class="flex justify-around items-center">' . $btn . '</div>';
            })
            ->make(true);
        }
        // $battalions = Battalion::where('schoolyear_id',$id)->get()
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
    public function show(int $battalion_id)
    {
        $bat = Battalion::find($battalion_id);
        return view('batallions.show',['battalion'=>$bat]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Battalion $battalion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Battalion $battalion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Battalion $battalion)
    {
        //
    }
}
