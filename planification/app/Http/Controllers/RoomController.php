<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;

use App\Models\Room;
use App\Models\Config;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $rooms = Room::select('*');
            
            return Datatables::of($rooms)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                           $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
         
                            return '<div class="flex justify-around items-center">' . $btn . '</div>' ;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            
        }
        $schoolyear_id = Config::find(1)->schoolyear_id;
        return view('rooms.index',['schoolyear_id'=>$schoolyear_id]);
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
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
