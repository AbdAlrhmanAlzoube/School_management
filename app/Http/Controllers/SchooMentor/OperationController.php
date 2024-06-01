<?php

namespace App\Http\Controllers\SchooMentor;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Guardian;
use App\Models\ClassRoom;
use App\Models\Attendance;
use App\Models\DailySchedule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{

    public function getDashboard()
    {

        return view('Dashboard.schoolMentors.dashboard');
    }

    public function getAttendance()
    {

        $request = request();
        $attendances = Attendance::filterAttendances
        ($request->only(['first_name', 'attendance_status']))
            ->paginate(10);
        return view('Dashboard.schoolMentors.pages.attendances.index', compact('attendances'));

    }
    public function getTeacher()
    {
        $request = request();
        $teachers = Teacher::filterTeachers($request->only('first_name'))
            ->paginate(10);
        return view('Dashboard.schoolMentors.pages.teachers.index', compact('teachers'));
    }

    public function getGuardian()
    {
        $request = request();
        $guardians = Guardian::filterGuardians($request->only('first_name'))
            ->paginate(10);
        return view('Dashboard.schoolMentors.pages.guardians.index', compact('guardians'));
    }

    public function getSubject()
    {
        $subjects = Subject::all();
        return view('Dashboard.schoolMentors.pages.subjects.index', compact('subjects'));
    }
    public function getStudent()
    {
        $request = request();
        $students = Student::filterStudents($request->only(['first_name', 'educational_level']))
            ->paginate(10);
        return view('Dashboard.schoolMentors.pages.students.index', compact('students'));
    }
    public function getGrade()
    {
        $request=request();
        $grades = Grade::filterGrades($request->only(['first_name','name']))
        ->paginate(10);
        return view('Dashboard.schoolMentors.pages.grades.index', compact('grades'));
    }

    public function getClassRoom()
    {
        $classRooms = ClassRoom::paginate(10);
        return view('Dashboard.schoolMentors.pages.class_rooms.index', compact('classRooms'));
    }

    public function getDailySchedules()
    {
        $dailySchedules = DailySchedule::all();
        return view('Dashboard.schoolMentors.pages.daily_schedules.index', compact('dailySchedules'));
    }

}