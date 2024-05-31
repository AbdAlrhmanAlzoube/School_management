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
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $classrooms = ClassRoom::all();
        
        return view('Dashboard.Admin.pages.daily_schedules.edit', compact('dailySchedule', 'subjects', 'teachers', 'classrooms'));
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
