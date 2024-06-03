<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Session;
use App\Models\Timing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
    //  */
    // public function get_available_timings(Request $request)
    // {


    //     $date = $request->input('session_date');
    //     $companiesIds = $request->input('companies');
    //     $CompaniesSessionsTimings = Session::where(function ($query) use ($date, $companiesIds) {
    //         $query->where('absented', 0)
    //             ->where('rectified', 0)
    //             ->where('anticipated', 0)
    //             ->where('sessions_table.sessionable_type', 'App\\Models\\Company')
    //             ->where('session_date', $date)
    //             ->whereIn('sessionable_id', $companiesIds);
    //     })->pluck('timing_id')
    //         ->toArray();
    //     $CompaniesAdditionalsTimings = Additional::join('additionables', 'additionables.additional_id', '=', 'additionals.id')
    //         ->where(function ($query) use ($date, $companiesIds) {
    //             $query->where('additional_date', $date)
    //                 ->where('additionables.additionable_type', 'App\\Models\\Company')
    //                 ->whereIn('additionables.additionable_id', $companiesIds);
    //         })
    //         ->pluck('additionals.timing_id')
    //         ->toArray();
    //     $CompaniesRctificationsTimings = Session::where(function ($query) use ($date, $companiesIds) {
    //         $query->where('sessions_table.rectified', 1)
    //             ->where('sessions_table.sessionable_type', 'App\\Models\\Company')
    //             ->where('sessions_table.session_date', $date)
    //             ->whereIn('sessions_table.sessionable_id', $companiesIds);
    //     })
    //         ->join('rectifications', 'rectifications.session_id', '=', 'sessions_table.id')
    //         ->pluck('rectifications.timing_id')
    //         ->toArray();
    //     $CompaniesCatchupTimings = Session::where(function ($query) use ($companiesIds) {
    //         $query->where('sessions_table.caughtup', 1)
    //             ->where('sessions_table.sessionable_type', 'App\\Models\\Company')
    //             ->whereIn('sessions_table.sessionable_id', $companiesIds);
    //     })
    //         ->join('caughtupabsences', 'caughtupabsences.session_id', '=', 'sessions_table.id')
    //         ->where('caughtupabsences.catchup_date', $date)
    //         ->pluck('caughtupabsences.timing_id')
    //         ->toArray();
    //     $OccupiedCompaniesTimings = array_unique(array_merge($CompaniesSessionsTimings, $CompaniesAdditionalsTimings, $CompaniesRctificationsTimings, $CompaniesCatchupTimings));



    //     $sectionsIds = $request->input('sections');
    //     $SectionsSessionsTimings = Session::where(function ($query) use ($date, $sectionsIds) {
    //         $query->where('sessions_table.absented', 0)
    //             ->where('sessions_table.rectified', 0)
    //             ->where('sessions_table.anticipated', 0)
    //             ->where('sessions_table.sessionable_type', 'App\\Models\\Section')
    //             ->where('session_date', $date)
    //             ->whereIn('sessionable_id', $sectionsIds);
    //     })->pluck('timing_id')
    //         ->toArray();
    //     $SectionsAdditionalsTimings = Additional::where('additional_date', $date)
    //         ->join('additionables', 'additionables.additional_id', '=', 'additionals.id')
    //         ->where('additionables.additionable_type', 'App\\Models\\Section')
    //         ->whereIn('additionables.additionable_id', $sectionsIds)
    //         ->pluck('additionals.timing_id')
    //         ->toArray();
    //     $SectionsRctificationsTimings = Session::where('sessions_table.rectified', 1)
    //         ->join('rectifications', 'rectifications.session_id', '=', 'sessions_table.id')
    //         ->where(function ($query) use ($date, $sectionsIds) {
    //             $query->where('sessions_table.sessionable_type', 'App\\Models\\Section')
    //                 ->where('sessions_table.session_date', $date)
    //                 ->whereIn('sessions_table.sessionable_id', $sectionsIds);
    //         })
    //         ->pluck('rectifications.timing_id')
    //         ->toArray();
    //     $SectionsCatchupTimings = Session::where(function ($query) use ($sectionsIds) {
    //         $query->where('sessions_table.caughtup', 1)
    //             ->where('sessions_table.sessionable_type', 'App\\Models\\Section')
    //             ->whereIn('sessions_table.sessionable_id', $sectionsIds);
    //         })
    //         ->join('caughtupabsences', 'caughtupabsences.session_id', '=', 'sessions_table.id')
    //         ->where('caughtupabsences.catchup_date', $date)
    //         ->pluck('caughtupabsences.timing_id')
    //         ->toArray();
    //     $OccupiedSectionsTimings = array_merge($SectionsSessionsTimings, $SectionsAdditionalsTimings, $SectionsRctificationsTimings, $SectionsCatchupTimings);

    //     $TotalOccupied = array_merge($OccupiedCompaniesTimings, $OccupiedSectionsTimings);
    //     $timings = Timing::whereNotIn('id', $TotalOccupied)->get();

    //     return response()->json($timings);
    // }
    public function get_available_timings(Request $request)
{
    $date = $request->input('session_date');
    $companiesIds = $request->input('companies', []);
    $sectionsIds = $request->input('sections', []);

    // Fetch timings for companies
    $CompaniesSessionsTimings = Session::where(function ($query) use ($date, $companiesIds) {
        $query->where('absented', 0)
            ->where('rectified', 0)
            ->where('anticipated', 0)
            ->where('sessionable_type', 'App\\Models\\Company')
            ->where('session_date', $date)
            ->whereIn('sessionable_id', $companiesIds);
    })->pluck('timing_id')->toArray();

    $CompaniesAdditionalsTimings = Additional::join('additionables', 'additionables.additional_id', '=', 'additionals.id')
        ->where(function ($query) use ($date, $companiesIds) {
            $query->where('additional_date', $date)
                ->where('additionables.additionable_type', 'App\\Models\\Company')
                ->whereIn('additionables.additionable_id', $companiesIds);
        })
        ->pluck('additionals.timing_id')->toArray();

    $CompaniesRectificationsTimings = Session::join('rectifications', 'rectifications.session_id', '=', 'sessions_table.id')
        ->where(function ($query) use ($date, $companiesIds) {
            $query->where('rectified', 1)
                ->where('sessionable_type', 'App\\Models\\Company')
                ->where('session_date', $date)
                ->whereIn('sessionable_id', $companiesIds);
        })
        ->pluck('rectifications.timing_id')->toArray();

    $CompaniesCatchupTimings = Session::join('caughtupabsences', 'caughtupabsences.session_id', '=', 'sessions_table.id')
        ->where(function ($query) use ($companiesIds) {
            $query->where('caughtup', 1)
                ->where('sessionable_type', 'App\\Models\\Company')
                ->whereIn('sessionable_id', $companiesIds);
        })
        ->where('caughtupabsences.catchup_date', $date)
        ->pluck('caughtupabsences.timing_id')->toArray();

    // Ensure no null values
    $CompaniesSessionsTimings = $CompaniesSessionsTimings ?? [];
    $CompaniesAdditionalsTimings = $CompaniesAdditionalsTimings ?? [];
    $CompaniesRectificationsTimings = $CompaniesRectificationsTimings ?? [];
    $CompaniesCatchupTimings = $CompaniesCatchupTimings ?? [];

    $OccupiedCompaniesTimings = array_unique(array_merge($CompaniesSessionsTimings, $CompaniesAdditionalsTimings, $CompaniesRectificationsTimings, $CompaniesCatchupTimings));

    // Fetch timings for sections
    $SectionsSessionsTimings = Session::where(function ($query) use ($date, $sectionsIds) {
        $query->where('absented', 0)
            ->where('rectified', 0)
            ->where('anticipated', 0)
            ->where('sessionable_type', 'App\\Models\\Section')
            ->where('session_date', $date)
            ->whereIn('sessionable_id', $sectionsIds);
    })->pluck('timing_id')->toArray();

    $SectionsAdditionalsTimings = Additional::join('additionables', 'additionables.additional_id', '=', 'additionals.id')
        ->where(function ($query) use ($date, $sectionsIds) {
            $query->where('additional_date', $date)
                ->where('additionables.additionable_type', 'App\\Models\\Section')
                ->whereIn('additionables.additionable_id', $sectionsIds);
        })
        ->pluck('additionals.timing_id')->toArray();

    $SectionsRectificationsTimings = Session::join('rectifications', 'rectifications.session_id', '=', 'sessions_table.id')
        ->where(function ($query) use ($date, $sectionsIds) {
            $query->where('rectified', 1)
                ->where('sessionable_type', 'App\\Models\\Section')
                ->where('session_date', $date)
                ->whereIn('sessionable_id', $sectionsIds);
        })
        ->pluck('rectifications.timing_id')->toArray();

    $SectionsCatchupTimings = Session::join('caughtupabsences', 'caughtupabsences.session_id', '=', 'sessions_table.id')
        ->where(function ($query) use ($sectionsIds) {
            $query->where('caughtup', 1)
                ->where('sessionable_type', 'App\\Models\\Section')
                ->whereIn('sessionable_id', $sectionsIds);
        })
        ->where('caughtupabsences.catchup_date', $date)
        ->pluck('caughtupabsences.timing_id')->toArray();

    // Ensure no null values
    $SectionsSessionsTimings = $SectionsSessionsTimings ?? [];
    $SectionsAdditionalsTimings = $SectionsAdditionalsTimings ?? [];
    $SectionsRectificationsTimings = $SectionsRectificationsTimings ?? [];
    $SectionsCatchupTimings = $SectionsCatchupTimings ?? [];

    $OccupiedSectionsTimings = array_merge($SectionsSessionsTimings, $SectionsAdditionalsTimings, $SectionsRectificationsTimings, $SectionsCatchupTimings);

    $TotalOccupied = array_merge($OccupiedCompaniesTimings, $OccupiedSectionsTimings);
    $timings = Timing::whereNotIn('id', $TotalOccupied)->get();

    return response()->json($timings);
}

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $additional = Additional::create([
            'teacher_id' => $request->input('teacher_id'),
            'module_id' => $request->input('module_id'),
            'timing_id' => $request->input('timing_id'),
            'additional_date' => $request->input('additional_date'),
            'session_type' => 'cour',
            'additive_id' => $request->input('additive_id'),
            'room_id' => $request->input('room_id')
        ]);
        $companiesIds = $request->input('companies', []);
        $sectionsIds = $request->input('sections', []);
        foreach ($companiesIds as $companyId) {
            DB::table('additionables')->insert([
                'additional_id' => $additional->id,
                'additionable_type' => 'App\\Models\\Company',
                'additionable_id' => $companyId
            ]);
        }
        foreach ($sectionsIds as $sectionsId) {
            DB::table('additionables')->insert([
                'additional_id' => $additional->id,
                'additionable_type' => 'App\\Models\\Section',
                'additionable_id' => $sectionsId
            ]);
        }
        $additional->load('timing','module','room','teacher','companies','sections');
        return response()->json($additional);
    }

    /**
     * Display the specified resource.
     */
    public function show(Additional $additional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Additional $additional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Additional $additional)
    {
        //
    }
}
