<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Additive;
use App\Models\CatchUp;
use App\Models\Module;
use App\Models\Rectification;
use App\Models\Teacher;
use App\Models\Timing;
use App\Models\Week;
use Illuminate\Http\Request;

class AdditiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function total_view($id)
    {
        $additive = Additive::with('rectifications', 'catchups', 'additionals')->find($id);
        return view('additives.total_view', ['additive' => $additive]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function word($id)
    {
        $additive = Additive::find($id);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $fontStyleName = 'oneUserDefinedStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
        );
        $section = $phpWord->addSection();
        $section->addText('Ecole Nationale Preparatoire aux Etudes d\'Ingéniorat',array(
            'bold' => true,
        ), array(
            'alignment' => 'center',
             'width'       => 460,
             'height'      => 100,
         ));
         $section->addText('Division d\'Etudes ',array(
            'bold' => true,
        ), array(
            'alignment' => 'center',
             'width'       => 460,
             'height'      => 100,
         ));
         $section->addText('Departement de planification et programmation ',array(
            'bold' => true,
        ), array(
            'alignment' => 'center',
             'width'       => 460,
             'height'      => 100,
         ));
         $section->addText('Additif numero :'.$additive->additive_number,array(
            'bold' => true,
            'size' => 28
        ), array(
            'alignment' => 'center',
           
         ));
        $section->addText('Semaine :'.$additive->week->global_week->global_week_number.'/Cours('.$additive->week->week_number.')',array(
            'bold' => true,
            'size' => 28
        ), array(
            'alignment' => 'center',
           
         ));
         $section->addText('Battalion :'.$additive->week->battalion->battalion .' AP',array(
            'bold' => true,
            'size' => 28
        ), array(
            'alignment' => 'center',
           
         ));
        $rectifications = $additive->rectifications;
        $catchups = $additive->catchups;
        $additionals = $additive->additionals;
        
        $tableStyle = array(
            'borderColor' => '006699',
            'borderSize' => 6,
            'cellMargin' => 50,
            'alignment' => 'center',
        );
        $phpWord->addTableStyle('myTable', $tableStyle);
        $table = $section->addTable('myTable');
        $TableHeaderStyle = array('bgColor' => 'c2c0ba');
        $table->addRow(30,$TableHeaderStyle);
        $cell = $table->addCell(20,$TableHeaderStyle);
        $cell->addText('Type');
        $cell = $table->addCell(20,$TableHeaderStyle);
        $cell->addText('Date');
        $cell = $table->addCell(20,$TableHeaderStyle);
        $cell->addText('Time');
        $cell = $table->addCell(20,$TableHeaderStyle);
        $cell->addText('Module');
        $cell = $table->addCell(20,$TableHeaderStyle);
        $cell->addText('Teacher');
        $cell = $table->addCell(20,$TableHeaderStyle);
        $cell->addText('Room');
        $cell = $table->addCell(20,$TableHeaderStyle);
        $cell->addText('Classes');
        foreach ($rectifications as $rectification) {
            $table->addRow(20);
            $cell = $table->addCell(30);
            $cell->addText('Rectification');
            $cell = $table->addCell(30);
            $cell->addText($rectification->session->session_date);
            $cell = $table->addCell(30);
            $cell->addText(substr($rectification->timing->session_start,0,5) . '->' . substr($rectification->timing->session_finish,0,5) );
            $cell = $table->addCell(30);
            $cell->addText($rectification->session->module->module);
            $cell = $table->addCell(30);
            $cell->addText($rectification->session->teacher->teacher_name);
            $cell = $table->addCell(30);
            $cell->addText($rectification->room->room);
            $cell = $table->addCell(30);
            $cell->addText($rectification->session->sessionable_type === 'App\\Models\\Company' ? $rectification->session->sessionable->company : $rectification->session->sessionable->section);
        }
        foreach ($additionals as $additional) {
            $table->addRow(20);
            $cell = $table->addCell(30);
            $cell->addText('Supplementaire');
            $cell = $table->addCell(30);
            $cell->addText($additional->additional_date);
            $cell = $table->addCell(30);
            $cell->addText(substr($additional->timing->session_start,0,5) . '->' . substr($additional->timing->session_finish,0,5) );
            $cell = $table->addCell(30);
            $cell->addText($additional->module->module);
            $cell = $table->addCell(30);
            $cell->addText($additional->teacher->teacher_name);
            $cell = $table->addCell(30);
            $cell->addText($additional->room->room);
            $cell = $table->addCell(30);
            foreach ($additional->sections as $section) {
                $cell->addText($section->section);
            }
            foreach ($additional->companies as $company) {
                $cell->addText($company->company);
            }
        }
        foreach ($catchups as $catchup) {
            $table->addRow(20);
            $cell = $table->addCell(30);
            $cell->addText('Ratt-Absence');
            $cell = $table->addCell(30);
            $cell->addText($catchup->catchup_date);
            $cell = $table->addCell(30);
            $cell->addText(substr($catchup->timing->session_start,0,5) . '->' . substr($catchup->timing->session_finish,0,5) );
            $cell = $table->addCell(30);
            $cell->addText($catchup->session->module->module);
            $cell = $table->addCell(30);
            $cell->addText($catchup->session->teacher->teacher_name);
            $cell = $table->addCell(30);
            $cell->addText($catchup->room->room);
            $cell = $table->addCell(30);
            $cell->addText($catchup->session->sessionable_type === 'App\\Models\\Company' ? $catchup->session->sessionable->company : $rectification->session->sessionable->section);
        }
        
        $file = 'HelloWorld.docx';
        header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Expires: 0');
        $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWriter->save("php://output");
    }
//     <tr class="table-row">
//     <th>Type</th>
//     <th>Date</th>
//     <th>Time</th>
//     <th>Module</th>
//     <th>Teacher</th>
//     <th>Room</th>
//     <th>Classes</th>
// </tr>
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
    public function teachers($modules, $schoolyear_id)
    {
        $ALLmodules = collect($modules)->flatten()->all();
        $teachers = Teacher::join('teachers_modules', 'teachers.id', '=', 'teachers_modules.teacher_id')
            ->whereIn('teachers_modules.module_id', $ALLmodules)
            ->where('teachers_modules.schoolyear_id', '=', $schoolyear_id)
            ->get();

        return $teachers;
    }
    public function show($id)
    {
        $additive = Additive::with('rectifications', 'additionals', 'catchups')->find($id);
        $week_id = $additive->week_id;
        $week = Week::with('global_week', 'sessions', 'absences')->find($week_id);
        $battalion = Week::find($week->id)->battalion;
        $timings = Timing::all();
        $rectifications = Rectification::with('session', 'room', 'timing')->where('additive_id', $additive->id)->get();
        $additionals = Additional::with('sections', 'companies')->where('additive_id', $additive->id)->get();
        $catchups = CatchUp::with('session')->where('additive_id', $additive->id)->get();
        $modules = Module::where('battalion', $battalion->battalion)->get();
        $ALLmodules = $modules->pluck('id')->toArray();
        $teachers = Teacher::join('teachers_modules', 'teachers.id', '=', 'teachers_modules.teacher_id')
            ->where('teachers_modules.schoolyear_id', $battalion->schoolyear_id)
            ->whereIn('teachers_modules.module_id', $ALLmodules)
            ->get();
        return view('additives.show', [
            'week' => $week,
            'battalion' => $battalion,
            'timings' => $timings,
            'additive' => $additive,
            'rectifications' => $rectifications,
            'additionals' => $additionals,
            'catchups' => $catchups,
            'modules' => $modules,
            'teachers' => $teachers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Additive $additive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Additive $additive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Additive::destroy($id);
        return redirect()->back();
    }
}
