<?php

namespace App\Http\Controllers\Student;
use App\Models\Grade;
use App\Models\DailySchedule;
use App\Http\Controllers\Controller;

class DailyScheduleStudentController extends Controller
{
    public function dailySchedule()
    {
        $dailySchedules = DailySchedule::all();
        return view('Dashboard.student.pages.daily_schedules.index', compact('dailySchedules'));
    }
    public function getGrade()
    {
        $request=request();
        $grades = Grade::filterGrades($request->only(['first_name','name']))
        ->paginate(10);
        return view('Dashboard.student.pages.grade.index', compact('grades'));
    }
}