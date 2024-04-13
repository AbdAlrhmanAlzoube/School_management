<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('admin.pages.attendances.index', compact('attendances'));
    }

    public function create()
    {
        return view('admin.pages.attendances.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'school_mentor_id' => 'required|exists:school_mentors,id',
            'class_room_id' => 'required|exists:class_rooms,id',
            'student_id' => 'required|exists:students,id',
            'attendance_date' => 'required|date',
            'attendance_status' => 'required|boolean',
        ]);

        Attendance::create($validatedData);

        return redirect()->route('attendances.index')->with('success', 'Attendance record created successfully');
    }

    public function show(Attendance $attendance)
    {
        return view('admin.pages.attendances.show', compact('attendance'));
    }

    public function edit(Attendance $attendance)
    {
        return view('admin.pages.attendances.edit', compact('attendance'));
    }

    public function update(Request $request, Attendance $attendance)
    {
        $validatedData = $request->validate([
            'school_mentor_id' => 'required|exists:school_mentors,id',
            'class_room_id' => 'required|exists:class_rooms,id',
            'student_id' => 'required|exists:students,id',
            'attendance_date' => 'required|date',
            'attendance_status' => 'required|boolean',
        ]);

        $attendance->update($validatedData);

        return redirect()->route('attendances.index')->with('success', 'Attendance record updated successfully');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return redirect()->route('attendances.index')->with('success', 'Attendance record deleted successfully');
    }
}
