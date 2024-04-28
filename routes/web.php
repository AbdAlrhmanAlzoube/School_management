<?php

use App\Http\Controllers\Teacher\GetStudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Teacher\MyController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\GuardianController;
use App\Http\Controllers\Admin\ClassRoomController;
use App\Http\Controllers\Admin\SchoolMentorController;
use App\Http\Controllers\Teacher\AttendanceController;
use App\Http\Controllers\Admin\DailyScheduleController;

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

Route::get('/admin', function () {
     return view('Dashboard.Admin.admin_dashboard');
});

Route::resource('users', UserController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('guardians', GuardianController::class);

Route::resource('school_mentors', SchoolMentorController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('students', StudentController::class);
Route::resource('grades', GradeController::class);
Route::resource('class_rooms', ClassRoomController::class);
Route::resource('daily_schedules', DailyScheduleController::class);


// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return view('Dashboard.Admin.admin_dashboard');
//     });

//     Route::resource('users', UserController::class);
//     Route::resource('teachers', TeacherController::class);
//     Route::resource('guardians', GuardianController::class);

//     Route::resource('school_mentors', SchoolMentorController::class);
//     Route::resource('subjects', SubjectController::class);
//     Route::resource('students', StudentController::class);
//     Route::resource('grades', GradeController::class);
//     Route::resource('class_rooms', ClassRoomController::class);
//     Route::resource('daily_schedules', DailyScheduleController::class);
// });




Route::get('/my_teacher',[MyController::class, 'index']);
Route::resource('/attendances', AttendanceController::class);
Route::get('/teacher_students', [GetStudentController::class, 'index'])->name('teacher_students.index');
