<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Module;
use App\Models\Room;
use App\Models\Section;
use App\Models\Session;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function BattalionCompanies($id, Request $request)
    {
        if ($request->ajax()) {
            $companies = Company::where('battalion_id', $id)->get();
            return DataTables::of($companies)
                ->addColumn('default_room', function ($row) {
                    $room = Room::where('id', $row->default_room_id)->first();
                    return $room->room;
                })
                ->addColumn('sections', function ($row) {
                    return $row->sections->count();
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/companies/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->make(true);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function view_section($id)
    {
        $section = Section::find($id);
        $company = $section->company;
        // $Cours = Session::where('sessionable_type', 'App\\Models\\Company')
        //     ->where('sessionsble_id', $company->id)
        //     ->whereAll(['absented', 'rectified', 'anticipated'], '=', 0)
        //     ->orWhereAll(['absented', 'caughtup'], '=', 1)
        //     ->join('absences', 'absences.session_id ', '=', 'sessions_tablle.id')
        //     ->where('absences.caughtup', '=', 1)
        //     ->get();
        // $Tds = Session::where('sessionable_type', 'App\\Models\\Section')
        //     ->where('sessionsble_id', $section->id)
        //     ->where('session_type', 'td')
        //     ->whereAll(['absented', 'rectified', 'anticipated'], '=', 0)
        //     ->orWhereAll(['absented', 'caughtup'], '=', 1)
        //     ->join('absences', 'absences.session_id ', '=', 'sessions_tablle.id')
        //     ->where('absences.caughtup', '=', 1)
        //     ->get();
        // $Tps = Session::where('sessionable_type', 'App\\Models\\Section')
        //     ->where('sessionsble_id', $section->id)
        //     ->where('session_type', 'tp')
        //     ->whereAll(['absented', 'rectified', 'anticipated'], '=', 0)
        //     ->orWhereAll(['absented', 'caughtup'], '=', 1)
        //     ->join('absences', 'absences.session_id ', '=', 'sessions_tablle.id')
        //     ->where('absences.caughtup', '=', 1)
        //     ->get();
        // $MovedTds = Session::where('sessionable_type', 'App\\Models\\Section')
        //     ->where('sessionsble_id', $section->id)
        //     ->where('session_type', 'td')
        //     ->where('rectified', 1)
        //     ->join('rectifications', 'rectifications.session_id', '=', 'sessions_table.id')
        //     ->where('rectifications.absented', '=', 0)
        //     ->orWhere('anticipated', 1)
        //     ->join('anticipations', 'anticipations.session_id', '=', 'sessions_table.id')
        //     ->where('anticipations.absented', '=', 0)
        //     ->get();

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
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
