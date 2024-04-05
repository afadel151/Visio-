<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Session;
use App\Models\Timing;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function get_available_timings(Request $request)
    {
        $date = $request->query('session_date');
        $companiesIds = $request->query('companies');
        $CompaniesSessionsTimings = Session::where('absented', 0)->where('rectified', 0)->where('anticipated', 0)
            ->where('sessions_table.sessionable_type', 'App\\Models\\Company')
            ->where('session_date', $date)
            ->whereIn('sessionable_id', $companiesIds)
            ->pluck('timing_id')
            ->toArray();
        $CompaniesAdditionalsTimings = Additional::where('additional_date', $date)

            ->join('additionables', 'additionables.additional_id', '=', 'additionals.id')
            ->where('additionables.additionable_type', 'App\\Models\\Company')
            ->whereIn('additionables.additionable_id', $companiesIds)
            ->pluck('additionals.timing_id')
            ->toArray();
        $CompaniesRctificationsTimings = Session::where('sessions_table.rectified', 1)
            ->where('sessions_table.sessionable_type', 'App\\Models\\Company')
            ->where('sessions_table.session_date', $date)
            ->whereIn('sessions_table.sessionable_id', $companiesIds)
            ->join('rectifications', 'rectifications.session_id', '=', 'sessions_table.id')

            ->pluck('rectifications.timing_id')
            ->toArray();
        $CompaniesCatchupTimings = Session::where('sessions_table.caughtup', 1)
            ->where('sessions_table.sessionable_type', 'App\\Models\\Company')

            ->whereIn('sessions_table.sessionable_id', $companiesIds)
            ->join('absences', 'absences.absenceable_id', '=', 'sessions_table.id')
            ->where('absences.absenceable_type', 'App\\Models\\Session')
            ->join('caughtupabsences', 'caughtupabsences.absence_id', '=', 'absences.id')
            ->where('caughtupabsences.catchup_date', $date)

            ->pluck('caughtupabsences.timing_id')

            ->toArray();
        $OccupiedCompaniesTimings = array_unique(array_merge($CompaniesSessionsTimings, $CompaniesAdditionalsTimings, $CompaniesRctificationsTimings, $CompaniesCatchupTimings));



        $sectionsIds = $request->query('sections');
        $SectionsSessionsTimings = Session::where('absented', 0)->where('rectified', 0)->where('anticipated', 0)
            ->where('sessions_table.sessionable_type', 'App\\Models\\Section')
            ->where('session_date', $date)
            ->whereIn('sessionable_id', $sectionsIds)
            ->pluck('timing_id')
            ->toArray();
        $SectionsAdditionalsTimings = Additional::where('additional_date', $date)
            ->join('additionables', 'additionables.additional_id', '=', 'additionals.id')
            ->where('additionables.additionable_type', 'App\\Models\\Section')
            ->whereIn('additionables.additionable_id', $sectionsIds)
            ->pluck('additionals.timing_id')
            ->toArray();
        $SectionsRctificationsTimings = Session::where('sessions_table.rectified', 1)
            ->join('rectifications', 'rectifications.session_id', '=', 'sessions_table.id')
            ->where('sessions_table.sessionable_type', 'App\\Models\\Section')
            ->where('sessions_table.session_date', $date)
            ->whereIn('sessions_table.sessionable_id', $sectionsIds)
            ->pluck('rectifications.timing_id')
            ->toArray();
        $SectionsCatchupTimings = Session::where('sessions_table.caughtup', 1)
            ->where('sessions_table.sessionable_type', 'App\\Models\\Section')
            ->whereIn('sessions_table.sessionable_id', $sectionsIds)
            ->join('absences', 'absences.absenceable_id', '=', 'sessions_table.id')
            ->where('absences.absenceable_type', 'App\\Models\\Session')
            ->join('caughtupabsences', 'caughtupabsences.absence_id', '=', 'absences.id')
            ->where('caughtupabsences.catchup_date', $date)
            ->pluck('caughtupabsences.timing_id')
            ->toArray();
        $OccupiedSectionsTimings = array_merge($SectionsSessionsTimings, $SectionsAdditionalsTimings, $SectionsRctificationsTimings, $SectionsCatchupTimings);

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
    public function store(Request $request)
    {
        //
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
