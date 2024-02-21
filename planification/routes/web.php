<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
            Route::get('/{teacher_id}',[TeacherController::class,'show'])->name('teachers.show');

            // Route::get('/create',[TeacherController::class,'create'])->name('teachers.create');
            // Route::post('/store',[TeacherController::class,'store'])->name('teachers.store');
            // Route::get('/updatepage',[TeacherController::class,'updatepage'])->name('teachers.updatepage');
            // Route::patch('/update',[TeacherController::class,'update'])->name('teachers.update');
        });
        Route::prefix('modules')->group(function () {
            Route::get('/',[ModuleController::class,'index'])->name('modules.index');
            Route::get('/{module_id}',[ModuleController::class,'show'])->name('modules.show');
        });
    });
});