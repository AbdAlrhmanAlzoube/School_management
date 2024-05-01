<?php

namespace App\Http\Controllers\Teacher;

use App\Models\DailySchedule;
use Illuminate\Routing\Controller;

class GetDailyScheduleController extends Controller
{
    public function index()
    {
        $dailySchedules = DailySchedule::all();
        return view('Dashboard.Teacher.pages.daily_schedules.index', compact('dailySchedules'));
    }
}