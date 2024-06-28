<?php

namespace App\Http\Controllers;

use App\Models\Battalion;
use App\Models\Config;
use App\Models\Occasion;
use App\Models\Timing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class OccasionController extends Controller
{
    function array_contains_values($array, $values)
    {
        // Check if there are elements in $array that are not in $values
    $diff1 = array_diff($array, $values);

    // Check if there are elements in $values that are not in $array
    $diff2 = array_diff($values, $array);

    // If both diffs are empty, $array contains only the elements in $values
    return empty($diff1) && empty($diff2);
    }
    public function index(Request $request)
    {
        

        if ($request->ajax()) {
            $occasions = Occasion::with('timings', 'battalions', 'companies', 'sections')->get();
            return DataTables::of($occasions)

                ->addColumn('occasionable', function ($row) {
                    $result = '';
                    if (isset($row->battalions)) {
                        foreach (Occasion::find($row->id)->battalions as $battalion) {
                            $result = $result . '/B:' .$battalion->battalion;
                        }
                    }
                    if (isset($row->companies)) {
                        foreach (Occasion::find($row->id)->companies as $company) {
                            $result = $result . '/C:' .$company->battalion->battalion.$company->company;
                        }
                    }
                    if (isset($row->sections)) {
                        foreach (Occasion::find($row->id)->sections as $section) {
                            $result = $result . '/' .$section->section;
                        }
                    }
                    return $result;
                })
                ->addColumn('timings', function ($row) {
                    $result = '';
                    $timingsIds = $row->timings->pluck('id')->toArray();
                    if ($this->array_contains_values($timingsIds, [1, 2, 3, 4, 5])) {
                        return 'All Day';
                    } elseif ($this->array_contains_values($timingsIds, [1, 2, 3])) {
                        return 'Morning';
                    } elseif ($this->array_contains_values($timingsIds, [4, 5])) {
                        return 'Afternoon';
                    } else {
                        foreach (Occasion::find($row->id)->timings as $timing) {
                            $result = $result . '' . $timing->session_start . '->' . $timing->session_finish;
                        }
                    }
                    return $result;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/modules/" class="edit btn btn-info btn-sm rounded-lg">View</a>';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $battalions = Battalion::with('sections', 'companies')->where('schoolyear_id', Config::find(1)->current_schoolyear_id)->get();
        $timings = Timing::all();
        $occasions = Occasion::with('timings', 'battalions', 'companies', 'sections')->get();
        return view('occasions.index', [
            'occasions' => $occasions,
            'battalions' => $battalions,
            'timings' => $timings
        ]);
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
        $timingsIds = $request->input('timings');
        $occasionables = $request->input('students');
        $occasion = Occasion::create([
            'occasion' => $occasion_name,
            'occasion_date' => $occasion_date,
            'timing_id' => 1 // delete next time 
        ]);
        foreach ($timingsIds as $timing_id) {
            DB::table('occasion_timings')->insert([
                'occasion_id' => $occasion->id,
                'timing_id' => $timing_id
            ]);
        }
        foreach ($occasionables as $occasionable) {
            if (str_starts_with($occasionable, 'B_')) {
                DB::table('occasionables')->insert([
                    'occasion_id' => $occasion->id,
                    'occasionable_type' => 'App\\Models\\Battalion',
                    'occasionable_id' => $this->extract_number($occasionable)
                ]);
            } elseif (str_starts_with($occasionable, 'C_')) {
                DB::table('occasionables')->insert([
                    'occasion_id' => $occasion->id,
                    'occasionable_type' => 'App\\Models\\Company',
                    'occasionable_id' => $this->extract_number($occasionable)
                ]);
            } elseif (str_starts_with($occasionable, 'S_')) {
                DB::table('occasionables')->insert([
                    'occasion_id' => $occasion->id,
                    'occasionable_type' => 'App\\Models\\Section',
                    'occasionable_id' => $this->extract_number($occasionable)
                ]);
            }
        }
    }

    function extract_number($string)
    {
        preg_match('/\d+/', $string, $matches);
        return isset($matches[0]) ? (int) $matches[0] : null;
    }
    public function destroy(Request $request)
    {

    }
}
