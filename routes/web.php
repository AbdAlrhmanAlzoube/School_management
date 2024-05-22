<?php

use App\Http\Controllers\Admin\DailyScheduleController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\GuardianController;
use App\Http\Controllers\Admin\SchoolMentorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Guardian\GuardianChildController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchooMentor\OperationController;
use App\Http\Controllers\Student\DailyScheduleStudentController;
use App\Http\Controllers\Teacher\AddGradeController;
use App\Http\Controllers\Teacher\AttendanceController;
use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Teacher\GetDailyScheduleController;
use App\Http\Controllers\Teacher\GetStudentController;
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
Route::get('/admin_dashboard', function () {
    return view('Dashboard.Admin.admin_dashboard');
});

Route::resource('users', UserController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('guardians', GuardianController::class);

Route::resource('school_mentors', SchoolMentorController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('students', StudentController::class);
Route::resource('grades', GradeController::class);
Route::resource('class_rooms', \App\Http\Controllers\Admin\ClassRoomController::class);
Route::resource('daily_schedules', DailyScheduleController::class);






Route::get('/teacher_dashboard', [DashboardController::class, 'index']);
Route::resource('/attendances', AttendanceController::class);
Route::get('/teacher_students', [GetStudentController::class, 'index'])->name('teacher_students.index');
Route::get('/teacher_daily_schedules', [GetDailyScheduleController::class, 'index'])->name('teacher_daily_schedules.index');
Route::resource('teacher_grades', AddGradeController::class);


Route::get('/guardian', function () {
    return view('Dashboard.guardians.guardian_dashboard');
});

Route::resource('children', GuardianChildController::class)->except('show');
Route::get('/children/{child}', [GuardianChildController::class, 'show'])->name('children.show');




Route::controller(OperationController::class)->group(function () {
    Route::get('/get_school_mentors_dashboard ', 'getDashboard');
    Route::get('/get_attendances', 'getAttendance')->name('get_attendances');
    Route::get('/get_teachers', 'getTeacher')->name('get_teachers');
    Route::get('/get_guardians', 'getGuardian')->name('get_guardians');
    Route::get('/get_subjects', 'getSubject')->name('get_subjects');
    Route::get('/get_students', 'getStudent')->name('get_students');
    Route::get('/get_grades', 'getGrade')->name('get_grades');
    Route::get('/get_class_rooms', 'getClassRoom')->name('get_class_rooms');
    Route::get('/get_daily_schedules', 'getDailySchedules')->name('get_daily_schedules');


});


Route::get('/dashboard_student',function()
{
    return view('Dashboard.student.dashboard');
});

Route::get('student_daily_schedules',[DailyScheduleStudentController::class, 'dailySchedule'])
    ->name('student_daily_schedules');


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
