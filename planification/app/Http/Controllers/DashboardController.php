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
        $global_week = GlobalWeek::find(2);
        $schoolyear_id = SchoolYear::find(1)->id;
        if ($global_week) {
            $nextgw = GlobalWeek::where('start_week_date', '<=', date('Y-m-d', strtotime('+7 days', strtotime($today))))->where('end_week_date', '>=', date('Y-m-d', strtotime('+7 days', strtotime($today))))->first();

                $nextgw = "last week of the year";
                $weeks = GlobalWeek::where('schoolyear_id', 1)->get();
                $GWS = $weeks->pluck('start_week_date')->toArray();
                $GWE = $weeks->pluck('end_week_date')->toArray();
                $globalweeks = [];
                $length = count($GWE);

                for ($i = 0; $i < $length; $i++) {
                    
                    $date = $GWS[$i] . '->' . $GWE[$i];
                    array_push($globalweeks, $date);
                }
                $aditives = [];
                $absences = [];
                $rectifications = [];
                $aditionals = [];
                $Ab = 0;
                $tab = 0;
                $Tt=0;
                foreach ($weeks as $week) {
                    $nb = $week->absences()->count();
                    $Rb = $week->absences()->where('caughtup',1)->count();
                    $additives = $week->additives();
                    $Additionals = 0;
                    foreach ($additives as $add){
                        $Additionals += $add->additionals()->count();
                        $Tt += $Additionals;
                    }
                    $Ab = $additives->count();
                    $tab += $Ab;
                    array_push($absences, $nb);
                    array_push($aditives, $Ab);
                    array_push($rectifications, $Rb);
                    array_push($aditionals,$Additionals);
                }
                $data = [
                    'labels' => $globalweeks,
                    'data' => $absences,
                    'Rectifications'=>$rectifications,
                ];
                
                $data2 = [
                    'labels' => $globalweeks,
                    'data' => $aditives,
                    'aditionals' => $aditionals,
                ];
                return view(
                    'dashboard0',
                    [
                        'global_week' => $global_week,
                        'schoolyear_id' => $schoolyear_id,
                        'next_week' => $nextgw,
                        'data' => $data,
                        'data2' => $data2,
                        'additionals' => $Tt,
                        'additives' => $tab,
                    ]
                );
            
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
