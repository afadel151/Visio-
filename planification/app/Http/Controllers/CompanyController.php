<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Room;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function BattalionCompanies($id, Request $request)
    {
        if ($request->ajax()) {
            $companies = Company::where('battalion_id', $id)->get();
            return DataTables::of($companies)
                ->addColumn('default_room', function ($row) {
                    $room = Room::where('id', $row->default_room_id)->first();
                    return $room->room;
                })
                ->addColumn('sections',function($row){
                    return $row->sections->count();
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/companies/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->make(true);
            // $battalions = Battalion::where('schoolyear_id',$id)->get()
        }
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
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
