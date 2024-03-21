<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditiveController;
use App\Http\Controllers\BattalionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
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
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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

Route::prefix('schoolyears')->group(function () {
    Route::get('/',[SchoolYearController::class,'index'])->name('schoolyears.index');
    // Route::get('/battalions',[SchoolYearController::class,'index'])->name('schoolyears.create');
    Route::post('/store',[SchoolYearController::class,'store'])->name('schoolyears.store');
    Route::post('/update',[SchoolYearController::class,'update'])->name('schoolyears.update');
    // Route::delete('/delete',[SchoolYearController::class,'delete'])->name('schoolyears.delete');
    Route::get('/{id}',[SchoolYearController::class,'showw'])->name('schoolyears.show');
    Route::get('/{id}/battalions',[BattalionController::class,'SY_battalions'])->name('schoolyears.battalions');
    Route::get('/current',[SchoolYearController::class,'currentSY'])->name('schoolyears.current');
});

Route::get('/sessions/{id}',[SessionController::class,'show']);
Route::get('teachers/classes/{id}',[TeacherController::class,'classes']);