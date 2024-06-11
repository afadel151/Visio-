<?php

namespace App\Http\Controllers;

use App\Models\Battalion;
use App\Models\Config;
use App\Models\Occasion;
use App\Models\Timing;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OccasionController extends Controller
{
    public function index(Request $request)  
    {

        if ($request->ajax()) {
            $occasions = Occasion::with('timing','occasionable')->get();
            return DataTables::of($occasions)
            ->addColumn('time',function ($row){
                return $row->timing->session_start.' - '.$row->timing->session_finish;
            })
            ->addColumn('occasionable', function ($row) {
                if ($row->occasionable_type === 'App\\Models\\Battalion') {
                    return 'Battalion '.$row->occasionable->battalion;
                }
                elseif ($row->occasionable_type === 'App\\Models\\Company') {
                    return 'Company '.$row->occasionable->battalion->battalion.' '.$row->occasionable->company;
                }
                else {
                    return 'Section '.$row->occasionable->section;
                }
            })
            ->addColumn('action', function ($row) {

                $btn = '<a href="/modules/" class="edit btn btn-info btn-sm rounded-lg">View</a>';

                return '<div class="flex justify-around items-center">' . $btn . '</div>';
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        $battalions = Battalion::with('sections','companies')->where('schoolyear_id',Config::find(1)->current_schoolyear_id)->get();
        $timings = Timing::all();
        $occasions = Occasion::with('timing','occasionable')->get();
        return view('occasions.index', ['occasions' => $occasions,
                                        'battalions' => $battalions,
                                        'timings'=> $timings]);
    }
    public function get_sessions_in_occasion(Request $request)
    {
        // provide section_id or company_id
        //get sessions with in_occasion : true
        //return the sessions
    }
    public function store(Request $request)
    {
        $occasion_date = $request->input('occasion_date');
        $occasion_name = $request->input('occasion_name');
        $timingsIds = $request->input('timing');
        $occasionables = $request->input('occasionables');
        // continue

    }
    public function destroy(Request $request)
    {
        
    }
}
