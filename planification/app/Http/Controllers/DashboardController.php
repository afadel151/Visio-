<?php

namespace App\Http\Controllers;

use App\Models\SchoolYear;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\GlobalWeek;
use App\Models\Config;
use PHPUnit\Framework\Constraint\IsEmpty;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = date('Y-m-d');
        // $global_week = GlobalWeek::where('start_week_date','<=',$today)->where('end_week_date','>=',$today)->first();
        $global_week = GlobalWeek::find(1);
        $schoolyear_id = SchoolYear::find(1)->id;
        if ($global_week) {

            $nextgw = GlobalWeek::where('start_week_date', '<=', date('Y-m-d', strtotime('+7 days', strtotime($today))))->where('end_week_date', '>=', date('Y-m-d', strtotime('+7 days', strtotime($today))))->first();
            if ($nextgw) {
                return view('dashboarding', ['global_week' => $global_week, 'schoolyear_id' => $schoolyear_id, 'next_week' => $nextgw]);
            } else {
                $nextgw = "last week of the year";
                $weeks = GlobalWeek::where('schoolyear_id', 1)->get();
                $GWS = GlobalWeek::where('schoolyear_id', 1)->pluck('start_week_date')->toArray();
                $GWE = GlobalWeek::where('schoolyear_id', 1)->pluck('end_week_date')->toArray();
                $globalweeks = [];
                $length = count($GWE);
                 
                for ($i=0; $i < $length ; $i++) { 
                    $date = $GWS[$i] . '->' . $GWE[$i];
                    array_push($globalweeks,$date);
                }
                $absences = [];
                foreach ($weeks as $week) {
                    $nb = $week->absences()->count();
                    array_push($absences, $nb);
                }
                $data = [
                    'labels' => $globalweeks,
                    'data' => $absences,
                ];
                return view('dashboarding', ['global_week' => $global_week,
                 'schoolyear_id' => $schoolyear_id,
                  'next_week' => $nextgw,
                   'data' => $data,
                    'globalweeks'=>$globalweeks,
                    'absences'=> $absences]);
            }
        } else {
            return "the globall week doesn't have weeks ";
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
