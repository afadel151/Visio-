<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\CatchUp;
use App\Models\Control;
use Yajra\DataTables\DataTables;

use App\Models\Room;
use App\Models\Session;
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
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        $schoolyear_id = Config::find(1)->schoolyear_id;
        return view('rooms.index', ['schoolyear_id' => $schoolyear_id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // $request->input('session_date')  $request->input('timing_id')
    public function available(Request $request)
    {
        // \Log::info('Available method called');$request->input('session_date')$request->input('timing_id')
        $date = $request->query('session_date');
        $timing_id = $request->query('timing_id');
        // $InSessions = Session::where('session_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        $InSessions = Session::where('session_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        \Log::info('Request Parameters - session_date: ' . $date . ', timing_id: ' . $timing_id);


        $InAdditionals = Additional::where('additional_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        $InCatchUp = CatchUp::where('catchup_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        $inControls = Control::where('control_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
   
        $OccupiedRooms = array_merge($InSessions, $InAdditionals, $inControls);
        $flattenedOccupiedRooms = [];
        // foreach ($OccupiedRooms as $subArray) {
        //     if (is_array($subArray)) {
        //         $flattenedOccupiedRooms = array_merge($flattenedOccupiedRooms, $subArray);
        //     } else {
        //          $flattenedOccupiedRooms = array_merge($flattenedOccupiedRooms, $subArray->toArray());
        //     }
        // }

        $available =Room::whereNotIn('id', $OccupiedRooms)->get()->toArray();
        return response()->json($available);
    }
    public function create()
    {
        return view('home');
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
        return view('landing');
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
