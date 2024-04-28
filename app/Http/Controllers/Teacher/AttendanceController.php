<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Student;
use App\Models\ClassRoom;

use App\Models\Attendance;
use App\Models\SchoolMentor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import Controller for Laravel conventions

class AttendanceController extends Controller 
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('Dashboard.teacher.pages.attendances.index', compact('attendances'));
    }

    public function create()
    {
        $schoolMentors = SchoolMentor::all(); // Retrieve all school mentors
        $classRooms = ClassRoom::all(); // Retrieve all classrooms
        $students = Student::all(); // R
        return view('Dashboard.teacher.pages.attendances.add',compact('schoolMentors','classRooms','students'));
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
        return view('Dashboard.teacher.pages.attendances.show', compact('attendance'));
    }

    public function edit(Attendance $attendance)
    {
        $schoolMentors = SchoolMentor::all(); // All school mentors
        $classRooms = ClassRoom::all(); // All classrooms
        $students = Student::all(); // All students
        
        // Pass them to the view
        return view('Dashboard.teacher.pages.attendances.edit', compact('attendance', 'schoolMentors', 'classRooms', 'students'));
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

