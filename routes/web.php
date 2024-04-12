<?php

use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminTeacherController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\GuardianController;
use App\Http\Controllers\Admin\SchoolMentorController;

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
    //  return view('Admin.Layouts.sidebar');
     return view('Admin.admin_dashboard');
});

Route::resource('users', UserController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('guardians', GuardianController::class);

Route::resource('school_mentors', SchoolMentorController::class);
Route::resource('subjects', SubjectController::class);
