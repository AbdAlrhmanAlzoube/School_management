<?php

namespace App\Http\Controllers\Student;
use App\Models\DailySchedule;
use App\Http\Controllers\Controller;

class DailyScheduleStudentController extends Controller
{
    public function dailySchedule()
    {
        $dailySchedules = DailySchedule::all();
        return view('Dashboard.student.pages.daily_schedules.index', compact('dailySchedules'));
    }
}