<?php

namespace App\Http\Controllers;

use App\Models\Exam;

use App\Models\Monitor;
use App\Models\Room;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\ExamRoomGroup;
use Yajra\DataTables\DataTables;

class ExamController extends Controller
{
    public function delete_monitor($id)
    {
        Monitor::destroy($id);
        return redirect()->back();
    }
    public function add_monitor(Request $request)
    {
        $monitor = new Monitor;
        $monitor->exam_id =  $request->exam_id;
        $monitor->exam_room_group_id = $request->room_group_id;
        $monitor->teacher_id = $request->teacher_id;
        $monitor->save();
        return redirect()->back();
    }
    public function store(Request $request)
    {

        $exam = new Exam();
        $exam->exam_date = $request->exam_date;
        $exam->module_id = $request->module_id;
        $exam->sector = $request->exam_sector;
        $exam->exam_time = $request->exam_time;
        $exam->week_id = $request->week_id;
        $exam->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $exam = Exam::find($id);
        $date = $exam->exam_date;
        $time = $exam->exam_time;
        $Occupied = Exam::where('exam_date', $date)->where('exam_time', $time)->join('exams_monitoring','exams.id','=','exams_monitoring.exam_id')->pluck('teacher_id')->toArray();
        $Available = Teacher::whereNotIn('id',$Occupied)->get();
        $rooms_groups = ExamRoomGroup::with('room')->where('sector', $exam->sector)->where('week_id', $exam->week_id)->get();
        $teachers = Monitor::where('exam_id', $exam->id)->with('teacher')->get();
        return view('exams.rooms-groups', [
                                        'exam' => $exam,
                                        'rooms_groups' => $rooms_groups,
                                        'teachers' => $teachers,
                                        'available_teachers' => $Available,
                                            ]);
    }
    public function get_rooms_groups_exam($id, Request $request)
    {

        if ($request->ajax()) {
            $exam = Exam::find($id);
            $rooms_groups = ExamRoomGroup::with('room')->where('sector', $exam->sector)->where('week_id', $exam->week_id)->get();
            \Log::info('Room group' . $rooms_groups);
            
            return Datatables::of($rooms_groups)
                ->addColumn('room', function ($row) {
                    return Room::find($row->room_id)->room;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<button class="btn btn-sm" onclick="openModal(this)">View Monitors</button>
                    <dialog  class="modal ">
                      <div class="modal-box">
                        <h3 class="font-bold text-lg">Hello!</h3>
                        <p class="py-4">Press ESC key or click the button below to close</p>
                        <ul class="menu bg-base-200 w-56 rounded-box">
                            <li>
                                <h2 class="menu-title">Teachers</h2>
                                <ul>
                                ';
                    foreach ($row->teachers as $teacher) {
                        $btn .= '<li><a href="' . route('teachers.show', $teacher->id) . '">' . $teacher->teacher_name . '</a></li>';
                    }
                    $btn .= '
                                </ul>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <div tabindex="0" role="button" class="btn m-1" onclick="GetAvailableTeachers(this)">Click</div>
                            <ul tabindex="0" class="dropdown-content z-[10] menu p-2 shadow bg-base-100 rounded-box w-60">
                                <li class="w-full">
                                <form action="" method="post" class="w-full flex flex-col space-y-4 p-10">
                                
                                    <select name="teacher_id"  class="select module-select">
                                        ';
                        $btn .= '
                                    </select>
                                    <button type="submit" class="btn btn-sm">Add Teacher</button>
                                </form>
                                </li>
                             
                            </ul>
                        </div>
                        <div class="modal-action">
                                <form method="dialog">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn">Close</button>
                                </form>
                        </div>
                      </div>
                    </dialog>

                    ';
                    $btn .= '<a href="javascript:void(0)" class=" btn btn-warning btn-sm ">Delete</a>';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->make(true);
        }
        $rooms_groups = ExamRoomGroup::where('exam_id', $id)->with('room')->all();
        return $rooms_groups;
    }

    public function get_rooms_groups($id, Request $request)
    {

        if ($request->ajax()) {
            $rooms_groups = ExamRoomGroup::where('week_id', $id)->with('room')->get();

            return Datatables::of($rooms_groups)
                ->addColumn('room', function ($row) {
                    return Room::find($row->room_id)->room;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class=" btn btn-sm ">View</a>';
                    $btn .= '<a href="javascript:void(0)" class=" btn btn-warning btn-sm ">Delete</a>';

                    return '<div class="flex justify-around items-center">' . $btn . '</div>';
                })
                ->make(true);
        }
        $rooms_groups = ExamRoomGroup::where('exam_id', $id)->with('room')->all();
        return $rooms_groups;
    }

    public function update(Request $request)
    {

    }
    public function add_exams_day(Request $request)
    {
        $date = $request->exams_date;
        $week_id = $request->week_id;
        $mi_am = new Exam();
        $mi_pm = new Exam();
        $st_am = new Exam();
        $st_pm = new Exam();
        if ($request->AM_MI_module_id != 0) {
            $mi_am->module_id = $request->AM_MI_module_id;
            $mi_am->exam_date = $date;
            $mi_am->week_id = $week_id;
            $mi_am->exam_time = 'AM';
            $mi_am->sector = 'MI';
            $mi_am->save();
        }
        if ($request->AM_ST_module_id != 0) {
            $st_am->module_id = $request->AM_ST_module_id;
            $st_am->exam_date = $date;
            $st_am->week_id = $week_id;
            $st_am->exam_time = 'AM';
            $st_am->sector = 'ST';
            $st_am->save();
        }
        if ($request->PM_MI_module_id != 0) {
            $mi_pm->module_id = $request->PM_MI_module_id;
            $mi_pm->exam_date = $date;
            $mi_pm->week_id = $week_id;
            $mi_pm->exam_time = 'PM';
            $mi_pm->sector = 'MI';
            $mi_pm->save();
        }
        if ($request->PM_ST_module_id != 0) {
            $st_pm->module_id = $request->PM_ST_module_id;
            $st_pm->exam_date = $date;
            $st_pm->week_id = $week_id;
            $st_pm->exam_time = 'PM';
            $st_pm->sector = 'ST';
            $st_pm->save();
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        Exam::destroy($id);
        return redirect()->back();
    }
}
