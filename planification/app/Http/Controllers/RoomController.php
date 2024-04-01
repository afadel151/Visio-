<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\CatchUp;
use App\Models\Control;
use App\Models\Rectification;
use Yajra\DataTables\DataTables;

use App\Models\Room;
use App\Models\Session;
use App\Models\Config;
use Illuminate\Http\Request;

class RoomController extends Controller
{

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

    public function available(Request $request)
    {
        $date = $request->query('session_date');
        $timing_id = $request->query('timing_id');
        $InSessions = Session::where('session_date', $date)
                                ->where('timing_id', $timing_id)
                                ->pluck('room_id')
                                ->toArray();
        $InAdditionals = Additional::where('additional_date', $date)
                                    ->where('timing_id', $timing_id)
                                    ->pluck('room_id')
                                    ->toArray();
        $InCatchUp = CatchUp::where('catchup_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        $InRectification = Rectification::where('timing_id', $timing_id)
                                                ->whereHas('session', function ($query) use ($date) 
                                                                    {
                                                                        $query->where('session_date', $date);
                                                                    })
                                                 ->pluck('room_id')->toArray();
        $inControls = Control::where('control_date', $date)->where('timing_id', $timing_id)->pluck('room_id')->toArray();
        $OccupiedRooms = array_merge($InSessions, $InAdditionals, $inControls, $InCatchUp, $InRectification);
        $available = Room::whereNotIn('id', $OccupiedRooms)->get()->toArray();
        return response()->json($available);
    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Room $room)
    {
        //
    }


    public function edit(Room $room)
    {
        //
    }

    public function update(Request $request, Room $room)
    {
        //
    }

    public function destroy(Room $room)
    {
        //
    }
}
