<?php
// use App\Http\Controllers;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\AdditiveController;
use App\Http\Controllers\BattalionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ControlsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamRoomController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\Batta;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\WeekController;
use App\Http\Controllers\GlobalWeekController;
use App\Models\GlobalWeek;
use App\Models\Timing;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => \Illuminate\Foundation\Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
// });

Route::get('get-message', function (){
    return response()->json([
        'message' => 'Hello there, it\'s your first response.'
    ], 200);
});

Route::get('/', function () {
    $global_week = GlobalWeek::with('events')->find(1);
    return view('landing2',['global_week'=>$global_week]);
})->name('home');
// Route::get('/{battalion_id}/{week_id}',[PlanningController::class,'create']);

Route::post('/sessionadd', [SessionController::class,'store'])->name('sessionadd');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware('auth')->group(function () {
    Route::prefix('/')->group(function (){
        Route::prefix('teachers')->group(function () {
            Route::get('/',[TeacherController::class,'index'])->name('teachers.index');
            Route::post('/create',[TeacherController::class,'create'])->name('teachers.create');
            Route::get('/delete/{id}',[TeacherController::class,'delete'])->name('teachers.delete');
            Route::post('/store',[TeacherController::class,'store'])->name('teachers.store');
            Route::post('/update',[TeacherController::class,'update'])->name('teachers.update');
            Route::get('/{id}',[TeacherController::class,'show'])->name('teachers.show');
            Route::post('/{id}/add_module',[TeacherController::class,'add_module'])->name('teachers.add_module');
            Route::get('/absences/{id}',[TeacherController::class,'absences'])->name('teachers.absences');
        });
        Route::prefix('sessions')->group(function () {
            Route::get('/create_tp',[SessionController::class,'create_tp'])->name('sessions.create_tp');
            Route::get('/store_rectification',[SessionController::class,'store_rectification'])->name('sessions.store_rectification');
            Route::get('/get_to_rectify',[SessionController::class,'get_to_rectify'])->name('sessions.get_to_rectify');
            Route::get('/get_absences',[SessionController::class,'get_absences'])->name('sessions.get_absences');
            
            Route::get('/',[SessionController::class,'index'])->name('sessions.index');
            Route::get('/delete/{id}',[SessionController::class, 'delete'])->name('sessions.delete');
            Route::post('/store',[SessionController::class,'store'])->name('sessions.store');
            Route::post('/update',[SessionController::class,'update'])->name('sessions.update');
            Route::get('/{id}',[SessionController::class,'show'])->name('sessions.show');
            Route::post('/mark_absence/{id}',[SessionController::class, 'mark_absence'])->name('sessions.mark_absence');
            
        });
        Route::prefix('modules')->group(function () {
            Route::get('/',[ModuleController::class,'index'])->name('modules.index');
            Route::get('/{id}',[ModuleController::class,'show'])->name('modules.show');
            Route::get('/create',[ModuleController::class,'index'])->name('modules.create');
            Route::post('/store',[ModuleController::class,'store'])->name('modules.store');
            Route::post('/update',[ModuleController::class,'update'])->name('modules.update');
            Route::delete('/delete',[ModuleController::class,'delete'])->name('modules.delete');

        });
        Route::prefix('rooms')->group(function () {
            Route::get('/',[RoomController::class,'index'])->name('rooms.index');
            Route::get('/create',[RoomController::class,'create'])->name('rooms.create');
            Route::post('/store',[RoomController::class,'store'])->name('rooms.store');
            Route::post('/update',[RoomController::class,'update'])->name('rooms.update');
            Route::delete('/delete',[RoomController::class,'delete'])->name('rooms.delete');
            // Route::get('/{id}',[RoomController::class,'show'])->name('rooms.show');
            Route::get('/available',[RoomController::class,'available'])->name('rooms.available');
        });
        Route::prefix('weeks')->group(function () {
            Route::get('/',[WeekController::class,'index'])->name('weeks.index');
            Route::get('/create',[WeekController::class,'index'])->name('weeks.create');
            Route::post('/store',[WeekController::class,'store'])->name('weeks.store');
            Route::post('/update',[WeekController::class,'update'])->name('weeks.update');
            Route::delete('/delete',[WeekController::class,'delete'])->name('weeks.delete');
            Route::get('/{id}',[WeekController::class,'show'])->name('weeks.show');
            Route::get('/{id}/controls',[WeekController::class,'controls'])->name('weeks.controls');
            Route::get('/{id}/pdf',[WeekController::class,'export_pdf'])->name('weeks.export_pdf');
            Route::get('/{id}/additives',[WeekController::class,'additives'])->name('weeks.additives');
            Route::post('/{id}/additives_add',[WeekController::class,'additives_add'])->name('weeks.additives_add');
        });
        Route::prefix('global_weeks')->group(function () {
            Route::get('/',[GlobalWeekController::class,'index'])->name('global_weeks.index');
            Route::get('/create',[GlobalWeekController::class,'create'])->name('global_weeks.create');
            Route::post('/store',[GlobalWeekController::class,'store'])->name('global_weeks.store');
            Route::post('/store_middle',[GlobalWeekController::class,'store_middle'])->name('global_weeks.store_middle');
            Route::post('/update',[GlobalWeekController::class,'update'])->name('global_weeks.update');
            Route::get('/destroy/{id}',[GlobalWeekController::class,'destroy'])->name('global_weeks.destroy');
            Route::get('/{id}',[GlobalWeekController::class,'show'])->name('global_weeks.show');
        });
        Route::prefix('battalions')->group(function () {
            Route::get('/',[BattalionController::class,'index'])->name('battalions.index');
            Route::get('/create',[BattalionController::class,'create'])->name('battalions.create');
            Route::post('/store',[BattalionController::class,'store'])->name('battalions.store');
            Route::post('/update',[BattalionController::class,'update'])->name('battalions.update');
            Route::delete('/delete',[BattalionController::class,'delete'])->name('battalions.delete');
            Route::get('/{id}',[BattalionController::class,'show'])->name('battalions.show');
            Route::get('/{id}/companies',[CompanyController::class,'BattalionCompanies'])->name('battalions.companies');
            Route::get('/{id}/weeks',[WeekController::class,'BattalionWeeks'])->name('battalions.weeks');
            Route::get('/{id}/store_companies',[BattalionController::class,'StoreCompanies'])->name('battalions.store_companies');

        });
        Route::prefix('companies')->group(function () {
            Route::get('/',[CompanyController::class,'index'])->name('companies.index');
            Route::get('/create',[CompanyController::class,'create'])->name('companies.create');
            Route::post('/store',[CompanyController::class,'store'])->name('companies.store');
            Route::post('/update',[CompanyController::class,'update'])->name('companies.update');
            Route::delete('/delete',[CompanyController::class,'delete'])->name('companies.delete');
            Route::get('/{id}',[CompanyController::class,'show'])->name('companies.show');
            Route::get('/{id}/weeks',[WeekController::class,'BattalionWeeks'])->name('companies.weeks');
        });
        Route::prefix('schoolyears')->group(function () {
            Route::get('/',[SchoolYearController::class,'index'])->name('schoolyears.index');
            Route::post('/store',[SchoolYearController::class,'store'])->name('schoolyears.store');
            Route::post('/update',[SchoolYearController::class,'update'])->name('schoolyears.update');
            Route::get('/{id}',[SchoolYearController::class,'showw'])->name('schoolyears.show');
            Route::get('/{id}/battalions',[BattalionController::class,'SY_battalions'])->name('schoolyears.battalions');
            Route::get('/current',[SchoolYearController::class,'currentSY'])->name('schoolyears.current');
        });
        Route::prefix('settings')->group(function () {
            Route::get('/',[SettingsController::class,'index'])->name('settings.index');
            Route::get('/schoolyears',[SettingsController::class,'schoolyears'])->name('settings.schoolyears');
            Route::get('/teachers',[SettingsController::class,'teachers'])->name('settings.teachers');
            Route::get('/modules',[SettingsController::class,'modules'])->name('settings.modules');
            Route::get('/battalions',[SettingsController::class,'battalions'])->name('settings.battalions');
            Route::get('/sections',[SettingsController::class,'sections'])->name('settings.sections');
        });
        Route::prefix('additives')->group(function () {
            Route::get('/',[AdditiveController::class,'index'])->name('additives.index');
            Route::get('/create',[AdditiveController::class,'create'])->name('additives.create');
            Route::get('/delete/{id}',[AdditiveController::class, 'delete'])->name('additives.delete');
            Route::post('/store',[AdditiveController::class,'store'])->name('additives.store');
            Route::post('/update',[AdditiveController::class,'update'])->name('additives.update');
            Route::get('/{id}',[AdditiveController::class,'show'])->name('additives.show');
        });
        Route::prefix('absences')->group(function () {
            Route::get('/',[AbsenceController::class,'index'])->name('absences.index');
            Route::post('/create_catchup',[AbsenceController::class,'create_catchup'])->name('absences.create_catchup');
            Route::get('/delete/{id}',[AbsenceController::class, 'delete'])->name('absences.delete');
            Route::post('/update',[AbsenceController::class,'update'])->name('absences.update');
            Route::get('/{id}',[AbsenceController::class,'show'])->name('absences.show');
        });
        Route::prefix('additionals')->group(function () {
            Route::get('/get_available_timings',[AdditionalController::class,'get_available_timings']);
        });
        Route::prefix('exams')->group(function () {
            Route::get('/{id}',[ExamController::class,'show'])->name('exams.show');
            Route::post('/store',[ExamController::class, 'store'])->name('exams.store');
            Route::get('/{id}/get_rooms_groups',[ExamController::class, 'get_rooms_groups'])->name('exams.get_rooms_groups');
            Route::get('/{id}/get_rooms_groups_exam',[ExamController::class, 'get_rooms_groups_exam'])->name('exams.get_rooms_groups_exam');
            Route::get('/destroy/{id}',[ExamController::class, 'destroy'])->name('exams.destroy');
            Route::post('/add_exams_day',[ExamController::class, 'add_exams_day'])->name('exams.add_exams_day');
            Route::post('/add_room_group',[ExamRoomController::class, 'store'])->name('exams.add_room_group');
            Route::post('/add_monitor',[ExamController::class, 'add_monitor'])->name('exams.add_monitor');
            Route::get('/delete_monitor/{id}',[ExamController::class, 'delete_monitor'])->name('exams.delete_monitor');
        });
        Route::prefix('controls')->group(function () {
            Route::get('/store',[ControlsController::class, 'store'])->name('controls.store');
            Route::get('/available_rooms',[ControlsController::class, 'available_rooms'])->name('controls.available_rooms');
            Route::get('/{id}',[ControlsController::class,'show'])->name('controls.show');
            
            Route::get('/destroy/{id}',[ControlsController::class, 'destroy'])->name('controls.destroy');
           

        });

    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('teachers/classes/{id}',[TeacherController::class,'classes']);
Route::post('sessions/create',[SessionController::class,'create'])->name('sessions.create');
// Route::post('/rooms/available', [RoomController::class, 'available']);
Route::get('/timings/', function (){
    return Timing::all();
});