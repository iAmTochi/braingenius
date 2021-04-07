<?php

use App\Http\Controllers\Web\Classes\ArmController;
use App\Http\Controllers\Web\Classes\ClassArmController;
use App\Http\Controllers\Web\Classes\ClassesController;
use App\Http\Controllers\Web\Configurations\SessionsController;
use App\Http\Controllers\Web\Dashboard\DashboardController;
use App\Http\Controllers\Web\Department\DepartmentController;
use App\Http\Controllers\Web\Subject\SubjectController;
use App\Http\Controllers\Web\User\AdminController;
use App\Http\Controllers\Web\User\GuardianController;
use App\Http\Controllers\Web\User\StaffController;
use App\Http\Controllers\Web\User\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware(['auth'])->group(function () {

    Route::get('admin/dashboard',            [DashboardController::class, 'index'])->name('home');
    Route::get('staff/my-profile',      [StaffController::class, 'profile'])->name('staff.profile');


    /*--------------- Class route ----------------- */
    Route::resource('classes/arm',          ArmController::class);
    Route::resource('classes/class',        ClassesController::class);
    Route::resource('classes/class-arm',    ClassArmController::class);

    /*----------------- Subject route --------------*/
    Route::resource('school/department', DepartmentController::class);
    Route::resource('school/subject',    SubjectController::class);

    /*----------------- staff route --------------*/
    Route::resource('staff', StaffController::class);

    /*----------------- guardian route --------------*/
    Route::resource('guardian', GuardianController::class);

    /*----------------- admin route --------------*/
    Route::middleware('isAdmin')->group(function () {
        Route::get('admin/my-profile',      [AdminController::class, 'profile'])->name('admin.profile');
        Route::resource('admin',  AdminController::class);
        Route::resource('student',StudentController::class);

    });

    Route::group(['prefix' => 'school-configuration'], function () {
        Route::resource('academic-sessions', SessionsController::class);
        Route::get('move', [SessionsController::class, 'move'])->name('move');

    });



});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
