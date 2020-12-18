<?php

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



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home',   'Web\DashboardController@index')->name('home');
    Route::get('staff/my-profile',     'Web\Admin\StaffController@profile')->name('staff.profile');


    /*--------------- Class route ----------------- */
    Route::resource('classes/arm',          'Web\Classes\ArmController');
    Route::resource('classes/class',                'Web\Classes\ClassesController');
    Route::resource('classes/class-arm',    'Web\Classes\ClassArmController');

    /*----------------- Subject route --------------*/
    Route::resource('school/department',    'Web\Department\DepartmentController');
    Route::resource('school/subject',    'Web\Subject\SubjectController');

    /*----------------- staff route --------------*/
    Route::resource('staff', 'Web\Admin\StaffController');

    /*----------------- admin route --------------*/
    Route::middleware('isAdmin')->group(function () {
        Route::get('admin/my-profile',  'Web\Admin\AdminController@profile')->name('admin.profile');
        Route::resource('admin', 'Web\Admin\AdminController');
        Route::resource('student', 'Web\Student\StudentController');

    });

    Route::group(['prefix' => 'school-configuration'], function () {
        Route::resource('academic-sessions', 'Web\Configurations\SessionsController');
        Route::get('move', 'Web\Configurations\SessionsController@move')->name('move');




    });



});


