<?php
// use App\Http\Controllers;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\WeekController;
use App\Http\Controllers\GlobalWeekController;
use Illuminate\Support\Facades\Route;

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
use App\Livewire\Counter;
 
Route::get('/counter', Counter::class);


Route::get('/', function () {
    return view('landing');
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
            Route::get('/create',[TeacherController::class,'create'])->name('teachers.create');
            Route::get('/delete',[TeacherController::class,'delete'])->name('teachers.delete');
            Route::post('/store',[TeacherController::class,'store'])->name('teachers.store');
            // Route::post('/updatepage',[TeacherController::class,'updatepage'])->name('teachers.updatepage');
            Route::post('/update',[TeacherController::class,'update'])->name('teachers.update');
            Route::get('/{teacher_id}',[TeacherController::class,'show'])->name('teachers.show');
        });
        Route::prefix('modules')->group(function () {
            Route::get('/',[ModuleController::class,'index'])->name('modules.index');
            Route::get('/create',[ModuleController::class,'index'])->name('modules.create');
            Route::post('/store',[ModuleController::class,'store'])->name('modules.store');
            Route::post('/update',[ModuleController::class,'update'])->name('modules.update');
            Route::delete('/delete',[ModuleController::class,'delete'])->name('modules.delete');
            Route::get('/{id}',[ModuleController::class,'show'])->name('modules.show');
        });
        Route::prefix('rooms')->group(function () {
            Route::get('/',[RoomController::class,'index'])->name('rooms.index');
            Route::get('/create',[RoomController::class,'index'])->name('rooms.create');
            Route::post('/store',[RoomController::class,'store'])->name('rooms.store');
            Route::post('/update',[RoomController::class,'update'])->name('rooms.update');
            Route::delete('/delete',[RoomController::class,'delete'])->name('rooms.delete');
            Route::get('/{id}',[RoomController::class,'show'])->name('rooms.show');
        });
        Route::prefix('weeks')->group(function () {
            Route::get('/',[WeekController::class,'index'])->name('weeks.index');
            Route::get('/create',[WeekController::class,'index'])->name('weeks.create');
            Route::post('/store',[WeekController::class,'store'])->name('weeks.store');
            Route::post('/update',[WeekController::class,'update'])->name('weeks.update');
            Route::delete('/delete',[WeekController::class,'delete'])->name('weeks.delete');
            Route::get('/{id}',[WeekController::class,'show'])->name('weeks.show');
        });
        Route::prefix('global_weeks')->group(function () {
            Route::get('/',[GlobalWeekController::class,'index'])->name('global_weeks.index');
            Route::get('/create',[GlobalWeekController::class,'index'])->name('global_weeks.create');
            Route::post('/store',[GlobalWeekController::class,'store'])->name('global_weeks.store');
            Route::post('/update',[GlobalWeekController::class,'update'])->name('global_weeks.update');
            Route::delete('/delete',[GlobalWeekController::class,'delete'])->name('global_weeks.delete');
            Route::get('/{id}',[GlobalWeekController::class,'show'])->name('global_weeks.show');
        });
        Route::prefix('schoolyears')->group(function () {
            Route::get('/',[SchoolYearController::class,'index'])->name('schoolyears.index');
            // Route::get('/create',[SchoolYearController::class,'index'])->name('schoolyears.create');
            Route::post('/store',[SchoolYearController::class,'store'])->name('schoolyears.store');
            Route::post('/update',[SchoolYearController::class,'update'])->name('schoolyears.update');
            // Route::delete('/delete',[SchoolYearController::class,'delete'])->name('schoolyears.delete');
            Route::get('/{id}',[SchoolYearController::class,'show'])->name('schoolyears.show');
        });
        Route::prefix('settings')->group(function () {
            Route::get('/',[SettingsController::class,'index'])->name('settings.index');
            Route::get('/schoolyears',[SettingsController::class,'schoolyears'])->name('settings.schoolyears');
            Route::get('/teachers',[SettingsController::class,'teachers'])->name('settings.teachers');
            Route::get('/modules',[SettingsController::class,'modules'])->name('settings.modules');
            Route::get('/battalions',[SettingsController::class,'battalions'])->name('settings.battalions');
            Route::get('/sections',[SettingsController::class,'sections'])->name('settings.sections');
        });
        

    });
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
