<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Module;
use App\Models\Room;
use App\Models\SchoolyearModule;
use App\Models\Section;
use App\Models\Session;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $companyid = 0;
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
    public function show_section($id)
    {
        $section = Section::find($id);
        $company = $section->company;
        return view('sections.show', ['section' => $section]);

    }
    public function SectionModulesProgress($id, Request $request)
    {
        if ($request->ajax()) {
            $section = Section::find($id);
            $company = Company::find($section->company_id);
            $modules = SchoolyearModule::with('module')->where('module_sector', $company->sector)->where('battalion_id', $company->battalion->id)->get();
            return DataTables::of($modules)
                ->addColumn('cours_dones', function ($row) use ($company) {
                    $NbCours = Session::where('module_id', $row->module_id)
                        ->where('sessionable_type', 'App\\Models\\Company')
                        ->where('sessionable_id', $company->id)
                        ->where(function($query){
                            $query->where('absented',0)
                                    ->orWhere(function($subQuery){
                                        $subQuery->where('absented',1)
                                                ->where('caughtup',1);
                                    });
                        })
                        ->count();
                        // return '<span class="flex justify-around items-center">'.$NbCours.'<progress class="progress w-56" value="' . $NbCours . '" max="' . $row->nb_cours . '"></progress></span>';
                        return '<span class="flex justify-around items-center">'.'8'.'<progress class="progress w-56" value="8" max="12"></progress></span>';
                    // 
                })
                ->addColumn('tds_dones', function ($row) use ($section) {
                    $NbTds = Session::where('module_id', $row->module_id)
                        ->where('sessionable_type', 'App\\Models\\Section')
                        ->where('sessionable_id', $section->id)
                        ->where('session_type', 'td')
                        ->where(function($query){
                            $query->where('absented',0)
                                    ->orWhere(function($subQuery){
                                        $subQuery->where('absented',1)
                                                ->where('caughtup',1);
                                    });
                        })
                        ->count();
                        // return '<span class="flex justify-around items-center">'.$NbTds.'<progress class="progress w-56" value="' . $NbTds . '" max="' . $row->nb_tds . '"></progress></span>';
                        return '<span class="flex justify-around items-center">'.'4'.'<progress class="progress w-56" value="4" max="8"></progress></span>';
                })
                ->addColumn('tps_dones', function ($row) use ($section) {

                    $NbTps = Session::where('module_id', $row->module_id)
                        ->where('sessionable_type', 'App\\Models\\Section')
                        ->where('sessionable_id', $section->id)
                        ->where('session_type', 'tp')
                        ->where(function($query){
                            $query->where('absented',0)
                                    ->orWhere(function($subQuery){
                                        $subQuery->where('absented',1)
                                                ->where('caughtup',1);
                                    });
                        })
                        ->count();
                        // return '<span class="flex justify-around items-center">'.$NbTps.'<progress class="progress w-56" value="' . $NbTps . '" max="' . $row->nb_tps . '"></progress></span>';
                        return '<span class="flex justify-around items-center">'.'2'.'<progress class="progress w-56" value="2" max="6"></progress></span>';
                })
                ->rawColumns(['cours_dones','tds_dones','tps_dones', 'action'])
                ->make(true);
        }
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
    public function show($id)
    {
        $company = Company::find($id);

        return view('companies.show', ['company' => $company]);
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



// axios.get('classes/' + {{ $teacher->id }}, {
//     params: data
// })
// .then(function(response) {
//     const classes = response.data;
//     document.getElementById('result').innerHTML = `
//     <p class="text-center text-5xl font-bold">The Teacher's Record : </p>
//     <div class="flex border-2 mt-5  justify-center items-start w-full">
//         <div class=" flex border-r-2 flex-col justify-center items-start w-full">
//             <p class="text-2xl font-bold w-full   bg-gray-300">Cours</p>
//             <p class="text-xl">Dones : ${classes.CoursDones}</p>
//             <p class="text-xl">Dones : ${classes.CoursDones}</p>
//             <p class="text-xl">Abented : ${classes.CoursAbsented}</p>
//             <p class="text-xl">Caught up :  ${classes.CoursCaughtUp}</p>
//         </div>
//         <div class=" flex border-r-2 flex-col justify-center items-start w-full">
//             <p class="text-2xl font-bold w-full  bg-gray-300">Tds</p>
//             <p class="text-xl">Dones : ${classes.TdsDones} </p>
//             <p class="text-xl">Absented :  ${classes.TdsAbsented}</p>
//             <p class="text-xl">Caught up :  ${classes.TdsCaughtUp}</p>
//         </div>
//         <div class=" flex border-r-2 flex-col justify-center items-start w-full">
//             <p class="text-2xl font-bold w-full  bg-gray-300 ">Tps</p>
//             <p class="text-xl">Dones :  ${classes.TpsDones}</p>
//             <p class="text-xl">Absented :  ${classes.TpsAbsented}</p>
//             <p class="text-xl">Caught up : ${classes.TpsCaughtUp} </p>
//         </div>
//         <div class=" flex border-r-2 flex-col justify-center items-start w-full">
//             <p class="text-2xl font-bold w-full  bg-gray-300">Additionals</p>
//             <p class="text-xl">Dones : ${classes.AdditionalsDones} </p>
//             <p class="text-xl">Absented : ${classes.AdditionalsAbsented} </p>
//         </div>
//         <div class=" flex border-r-2 flex-col justify-center items-start w-full">
//             <p class="text-2xl font-bold w-full  bg-gray-300">Exam Monitoring</p>
//             <p class="text-xl">Dones : 4</p>
//             <p class="text-xl">Absented :  0</p>
//         </div>
//          <div class=" flex border-r-2 flex-col justify-center items-start w-full">
//             <p class="text-2xl font-bold w-full  bg-gray-300">Control Monitoring</p>
//             <p class="text-xl">Dones : 8</p>
//             <p class="text-xl">Absented :  0</p>
//         </div>
//     </div>
//         `;
//     console.log(response);
// })