<?php

namespace App\Http\Controllers;

use App\Models\Battalion;
use App\Models\Config;
use App\Models\GlobalWeek;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Yajra\DataTables\DataTables;
use App\Models\SchoolYear;
use App\Models\Week;
use Ramsey\Uuid\Type;

class SchoolYearController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $schoolyears = SchoolYear::all();

            return Datatables::of($schoolyears)
                ->addIndexColumn()
                ->addColumn('global_weeks', function ($schoolyear) {
                    return $schoolyear->global_weeks->count();
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="/schoolyears/' . $row->id . '" class="edit btn btn-info btn-sm rounded-lg">View</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>';
                    // $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>';
    
                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        ;
        $schoolyears = SchoolYear::all();
        return view('schoolyears.index', ['schoolyears' => $schoolyears]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schoolyear = new SchoolYear;
        $b1 = new Battalion;
        $b1->battalion = 1;

        $b2 = new Battalion;
        $b2->battalion = 2;

        $b3 = new Battalion;
        $b3->battalion = 3;

        $schoolyear->schoolyear = $request->input('schoolyear');
        $schoolyear->schoolyear_start_date = $request->input('schoolyear_start_date');
        $schoolyear->save();

        $b1->schoolyear_id = $schoolyear->id;
        $b2->schoolyear_id = $schoolyear->id;
        $b3->schoolyear_id = $schoolyear->id;

        $b1->save();
        $b2->save();
        $b3->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */

    public function showw($id, Request $request)
    {

        if ($request->ajax()) {
            $schoolyear = SchoolYear::where('id', $id)->first();
            $global_weeks = $schoolyear->global_weeks;
            return Datatables::of($global_weeks)
                ->addColumn('battalion_1', function ($global_week) {
                    $week = new Week();
                    $week = $global_week->weeks->first(function ($week) {
                        return $week->battalion->battalion == 1;
                    });

                    return $week ? $week : 'Empty';

                })
                ->addColumn('battalion_2', function ($row) {
                    $week = new Week();
                    $week = $row->weeks->first(function ($week) {
                        return $week->battalion->battalion == 2;
                    });

                    return $week ? $week : 'Empty';
                })
                ->addColumn('battalion_3', function ($global_week) {
                    $week = new Week();
                    $week = $global_week->weeks->first(function ($week) {
                        return $week->battalion->battalion == 3;
                    });

                    return $week ? $week : 'Empty';
                })
                ->addColumn('events', function ($global_week) {
                    $events = '';
                    foreach ($global_week->events as $event) {
                        $events = $events . $event->event;
                    }
                    if ($events) {
                        return $events;
                    } else {
                        $event = "No events available";
                        return $event;
                    }

                })
                ->addColumn('sport_events', function ($global_week) {
                    $sport_events = '';
                    foreach ($global_week->sport_events as $sport_event) {
                        $sport_events = $sport_events . $sport_event->sport_event;
                    }
                    if ($sport_events) {
                        return $sport_events;
                    } else {
                        $event = "No events available";
                        return $event;
                    }

                })
                ->addColumn('action', function ($row) {

                    $btn = '<button  class="edit btn btn-info   " onclick="ShowMiddleForm(this)" id="new-global-week-middle">New  
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path d="M2 4.25A2.25 2.25 0 0 1 4.25 2h2.5A2.25 2.25 0 0 1 9 4.25v2.5A2.25 2.25 0 0 1 6.75 9h-2.5A2.25 2.25 0 0 1 2 6.75v-2.5ZM2 13.25A2.25 2.25 0 0 1 4.25 11h2.5A2.25 2.25 0 0 1 9 13.25v2.5A2.25 2.25 0 0 1 6.75 18h-2.5A2.25 2.25 0 0 1 2 15.75v-2.5ZM11 4.25A2.25 2.25 0 0 1 13.25 2h2.5A2.25 2.25 0 0 1 18 4.25v2.5A2.25 2.25 0 0 1 15.75 9h-2.5A2.25 2.25 0 0 1 11 6.75v-2.5ZM15.25 11.75a.75.75 0 0 0-1.5 0v2h-2a.75.75 0 0 0 0 1.5h2v2a.75.75 0 0 0 1.5 0v-2h2a.75.75 0 0 0 0-1.5h-2v-2Z" />
                        </svg>
                    </button>
                    <form action="/global_weeks/store_middle" enctype="multipart/form-data"
                    method="POST"
                    class=" p-4 z-30  hidden absolute top-0 right-0 h-fit flex flex-col justify-center items-center  bg-base-200  
                    shadow-sm   w-[80%] rounded-3xl ">
                    <input type="hidden" name="_token" value="' . csrf_token() . '"> <!-- Include CSRF token manually -->
                    <input type="hidden" name="start_week_date" value="'.$row->start_week_date.'">
                    <input type="hidden" name="end_week_date" value="'.$row->end_week_date.'">
                    <input type="hidden" name="schoolyear_id" value="'.$row->schoolyear_id.'">
                    <a onclick="HideMiddleForm(this)"  class=" absolute top-6 right-6 btn btn-circle"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  
                  </a>
                    <div class="flex justify-around items-center space-x-6 text-xl">
                        <div class="flex flex-col justify-around items-stretch space-y-4">
                            <p class="text-2xl font-bold text-center">1st Battalion</p>
                            <div class="flex justify-between space-x-2 items-center">
                                <label class="label">type</label>
                                <select name="type_1" id="1" class="select select-bordered w-30">
                                    <option value="Cours Magistreaux">Cours Magistreaux</option>
                                    <option value="Cours">Cours</option>
                                    <option value="Examens">Examens</option>
                                    <option value="Detente">Detente</option>
                                    <option value="Formation militaire">Formation militaire</option>
                                    <option value="Conge">Conge</option>
                                    <option value="Recrutement">Recrutement</option>
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="s1">semester</label>
                                <select name="semester_1" class="select select-bordered" id="s1">
                                    <option value="1">S1</option>
                                    <option value="2">S2</option>
                                </select>
                            </div>

                            <div class="flex justify-between space-x-2 items-center">
                                <label for="cc1">Control Continue</label>
                                <input type="checkbox" name="cc_1" value="true"
                                    class="checkbox checkbox-lg" id="cc1">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sp1">Examen Sport</label>
                                <input type="checkbox" name="sport_1" class="checkbox checkbox-lg"
                                    value="true" id="sp1">
                            </div>
                        </div>

                        <div class="flex flex-col justify-around items-around space-y-4">
                            <p class="text-2xl font-bold text-center">2nd Battalion</p>
                            <div class="flex justify-between space-x-2 items-center">

                                <label for="2">type</label>
                                <select name="type_2" id="2" class="select select-borderedw-30">
                                    <option value="Cours Magistreaux">Cours Magistreaux</option>
                                    <option value="Cours">Cours</option>
                                    <option value="Examens">Examens</option>
                                    <option value="Detente">Detente</option>
                                    <option value="Formation militaire">Formation militaire</option>
                                    <option value="Conge">Conge</option>
                                    <option value="Recrutement">Recrutement</option>
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="s2">semester</label>
                                <select name="semester_2" class="select select-bordered" id="s2">
                                    <option value="1">S1</option>
                                    <option value="2">S2</option>
                                </select>
                            </div>

                            <div class="flex justify-between space-x-2 items-center">
                                <label for="cc2">Control Continue </label>
                                <input type="checkbox" name="cc_2" class="checkbox checkbox-lg"
                                    value="true" id="cc2">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sp2">Examen Sport</label>
                                <input type="checkbox" class="checkbox checkbox-lg" name="sport_2"
                                    value="true" id="sp2">
                            </div>
                        </div>
                        <div class="flex flex-col justify-around items-stretch space-y-4">
                            <p class="text-2xl font-bold text-center">3rd Battalion</p>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="3">type</label>
                                <select name="type_3" id="3"
                                    class="select select-borderedw-30">
                                    <option value="Cours Magistreaux">Cours Magistreaux</option>
                                    <option value="Cours">Cours</option>
                                    <option value="Examens">Examens</option>
                                    <option value="Detente">Detente</option>
                                    <option value="Formation militaire">Formation militaire</option>
                                    <option value="Conge">Conge</option>
                                    <option value="Recrutement">Recrutement</option>
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="s3">semester</label>
                                <select name="semester_3" class="select select-bordered" id="s3">
                                    <option value="1">S1</option>
                                    <option value="2">S2</option>
                                </select>
                            </div>

                            <div class="flex justify-between space-x-2 items-center">
                                <label for="cc3">Control Continue</label>
                                <input type="checkbox" name="cc_3" value="true"
                                    class="checkbox checkbox-lg" id="cc3">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sp3">Examen Sport</label>
                                <input type="checkbox" name="sport_3" class="checkbox checkbox-lg"
                                    value="true" id="sp3">
                            </div>
                        </div>
                        <div class="flex flex-col justify-around items-sretch space-y-4">
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="ev">Events</label>
                                <input type="text" name="event" id="ev"
                                    class="input input-bordered input-lg w-30">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sev">Sport events</label>
                                <input type="text" name="sport_event" id="sev"
                                    class="input input-bordered input-lg w-30">
                            </div>
                        </div>
                    </div>
                    <div class=" h-20 w-60 flex justify-center items-center mt-10">
                        <button type="submit"
                            class="  h-12  btn btn-neutral">INSERT</button>
                    </div>
                </form>
                    ';
                    $btn = $btn . '
                    <!-- Open the modal using ID.showModal() method -->
                    <button class="btn btn-warning" onclick="openModal(this)">Delete</button>
                    <dialog id="my_modal_5" class="modal ">
                      <div class="modal-box h-60 w-96">
                        <h3 class="font-bold text-lg">Hello!</h3>
                        <p class="py-4 text-xl">Do you really want to Delete the week from : <br /><span class="font-bold">'.$row->start_week_date.' to '.$row->end_week_date.'</span></p>
                        <div class="modal-action">
                          <form method="dialog">
                            <!-- if there is a button in form, it will close the modal -->
                            <a href="/global_weeks/destroy/' . $row->id . '" class="edit btn btn-warning rounded-lg">Delete
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                            </svg>
                      
                        </a>
                            <button class="btn">Close</button>
                          </form>
                        </div>
                      </div>
                    </dialog>

                   ';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->make(true);

        }
        ;
        $schoolyear = SchoolYear::where('id', $id)->first();
        if ($schoolyear) {
            $global_weeks = $schoolyear->global_weeks;
            if ($global_weeks) {
                $maxStartDate = $global_weeks->max('start_week_date');
            } else {
                $maxStartDate = date('Y-m-d', strtotime('-7 days', strtotime($schoolyear->start_date)));
            }
            return view('schoolyears.show', ['schoolyear' => $schoolyear, 'global_weeks' => $global_weeks, 'maxstartdate' => $maxStartDate, 'schoolyear_id' => $schoolyear->id]);
        } else {
            return 'there is no schoolyear for now';
        }

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
    public function currentSY()
    {
        $today = date('Y-m-d');
        // R == new Request
        $global_week = GlobalWeek::where('start_week_date', '<=', $today)->where('end_week_date', '>=', $today)->first();
        if ($global_week) {
            $schoolyear_id = (int) $global_week->schoolyear_id;
            dd($schoolyear_id);
            // return $this->show((int)$schoolyear_id,new Request);
        } else {
            return 'there is no global week this time';
        }

    }
}
