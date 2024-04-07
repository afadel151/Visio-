<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamRoomGroup;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {}
    public function create()
    {

    }
    public function store(Request $request)
    {
       
        $exam = new Exam();
        $exam->exam_date = $request->exam_date;
        $exam->module_id = $request->module_id;
        $exam->sector = $request->exam_sector;
        $exam->exam_time =  $request->exam_time;
        $exam->week_id = $request->week_id;
        $exam->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $rooms_groups = ExamRoomGroup::where('exam_id', $id)->all();
        $exam = Exam::find($id);
        
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
            $mi_am->module_id =$request->AM_MI_module_id;
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
