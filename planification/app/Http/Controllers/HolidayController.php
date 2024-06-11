<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\SchoolYear;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Models\Holiday;
use Yajra\DataTables\DataTables;

class HolidayController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $holidays = Holiday::with('schoolyear')->get();
            return DataTables::of($holidays)
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/modules/" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    $btn = $btn . '<button class="btn btn-warning btn-sm" onclick="my_modal_2.showModal()">Delete</button>
                        <dialog id="my_modal_2" class="modal">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">Hello!</h3>
                            <p class="py-4">Press ESC key or click the button below to close</p>
                            <div class="modal-action">
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn btn-error">Delete</button>
                                <button class="btn">Close</button>
                                
                            </form>
                            </div>
                        </div>
                        </dialog>';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })->rawColumns(['action'])
                ->make(true);
        }
        $holidays = Holiday::all();
        $schoolyears = SchoolYear::all();
        $current_schoolyear = SchoolYear::find(Config::find(1)->current_schoolyear_id);
        return view('holidays.index', ['holidays' => $holidays, 'schoolyears' => $schoolyears, 'current_schoolyear' => $current_schoolyear]);
    }
    public function get_sessions_in_holiday(Request $request)
    {
        // provide section_id or company_id
        //get sessions with in_holidays : true
        //return the sessions
    }
    public function store(Request $request)
    {
        $date = $request->input('holiday_date');
        $schoolyear_id = $request->input('schoolyear_id');
        $name = $request->input('holiday_name');
        $date_holidays = Holiday::where('holiday_date', $date)->count();
        if ($date_holidays == 0) {
            $holiday = new Holiday;
            $holiday->holiday_date = $date;
            $holiday->holiday_name = $name;
            $holiday->schoolyear_id = $schoolyear_id;
            $holiday->save();
            Session::where('session_date', $date)->update([
                'in_holiday' => true
            ]);
            return response()->json('Success',200);
        } else {
            return response()->json('Holiday with same date Exists', 203);
        }
    }
    public function destroy(Request $request)
    {
        // make sessions in_holiday false
    }
}
