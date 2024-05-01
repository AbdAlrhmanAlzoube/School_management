<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\ClassRoom;
use App\Models\DailySchedule;
use Illuminate\Http\Request; 
use Illuminate\Routing\Controller;

class DailyScheduleController extends Controller
{
    public function index()
    {
        $dailySchedules = DailySchedule::all();
        return view('Dashboard.Admin.pages.daily_schedules.index', compact('dailySchedules'));
    }

    public function create()
    {
        // Fetch necessary data for creating a new daily schedule
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $classrooms = ClassRoom::all();
        
        return view('Dashboard.Admin.pages.daily_schedules.add', compact('subjects', 'teachers', 'classrooms'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'day_name' => ['required', 'string', 'max:255'],
            'subject_id' => ['required', 'integer', 'exists:subjects,id'],
            'teacher_id' => ['required', 'integer', 'exists:teachers,id'],
            'class_room_id' => ['required', 'integer', 'exists:class_rooms,id'],
            'start_time' => ['required', 'string', 'max:255'],
            'end_time' => ['required', 'string', 'max:255'],
            'educational_level' => ['required', 'string', 'max:255'],
        ]);
        
        // Create a new daily schedule
        $dailySchedule = DailySchedule::create($validatedData);
        
        return redirect()->route('daily_schedules.index')->with('success', 'Daily schedule created successfully');
    }
    
    public function update(Request $request, DailySchedule $dailySchedule)
    {
        $validatedData = $request->validate([
            'day_name' => ['required', 'string', 'max:255'],
            'subject_id' => ['required', 'integer', 'exists:subjects,id'],
            'teacher_id' => ['required', 'integer', 'exists:teachers,id'],
            'class_room_id' => ['required', 'integer', 'exists:class_rooms,id'],
            'start_time' => ['required', 'string', 'max:255'],
            'end_time' => ['required', 'string', 'max:255'],
            'educational_level' => ['required', 'string', 'max:255'],
        ]);
        
        // Update the daily schedule
        $dailySchedule->update($validatedData);
        
        return redirect()->route('daily_schedules.index')->with('success', 'Daily schedule updated successfully');
    }
    

    public function edit(DailySchedule $dailySchedule)
    {
        // Fetch necessary data for editing the daily schedule, like subjects, teachers, classrooms.
        // Adjust as per your requirements.
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $classrooms = ClassRoom::all();
        
        return view('Admin.pages.daily_schedules.edit', compact('dailySchedule', 'subjects', 'teachers', 'classrooms'));
    }
    
    public function show(DailySchedule $dailySchedule)
    {
        return view('Dashboard.admin.pages.daily_schedules.show', compact('dailySchedule'));
    }

    public function destroy(DailySchedule $dailySchedule)
    {
        $dailySchedule->delete();
        return redirect()->route('daily_schedules.index')->with('success', 'Daily schedule deleted successfully');
    }
}
