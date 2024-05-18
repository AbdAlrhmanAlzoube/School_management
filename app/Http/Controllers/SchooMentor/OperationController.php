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
            
            $attendances = Attendance::all();
            return view('Dashboard.schoolMentors.pages.attendances.index', compact('attendances'));
           
        }
        public function getTeacher()
        {
            $teachers = Teacher::all();
            return view('Dashboard.schoolMentors.pages.teachers.index', compact('teachers'));
        }

        public function getGuardian()
        {
            $guardians = Guardian::all();
            return view('Dashboard.schoolMentors.pages.guardians.index', compact('guardians'));
        }

        public function getSubject()
        {
            $subjects = Subject::all();
            return view('Dashboard.schoolMentors.pages.subjects.index', compact('subjects'));
        }
        public function getStudent()
        {
            $students = Student::all();
            return view('Dashboard.schoolMentors.pages.students.index', compact('students'));
        }
        public function getGrade()
        {
            $grades = Grade::all();
            return view('Dashboard.schoolMentors.pages.grades.index', compact('grades'));
        }

        public function getClassRoom()
        {
            $classRooms = ClassRoom::all();
            return view('Dashboard.schoolMentors.pages.class_rooms.index', compact('classRooms'));
        }

        public function getDailySchedules()
        {
            $dailySchedules = DailySchedule::all();
            return view('Dashboard.schoolMentors.pages.daily_schedules.index', compact('dailySchedules'));
        }
    
}