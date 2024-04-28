<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('Dashboard.admin.pages.grades.index', compact('grades'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        $students = Student::all();
        $subjects = Subject::all();
        return view('Dashboard.admin.pages.grades.add', compact('teachers', 'students', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'mark' => 'required|string|max:255',
        ]);

        Grade::create($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade created successfully');
    }

    public function show(Grade $grade)
    {
        return view('Dashboard.admin.pages.grades.show', compact('grade'));
    }

    public function edit(Grade $grade)
    {
        $teachers = Teacher::all();
        $students = Student::all();
        $subjects = Subject::all();
        return view('Dashboard.admin.pages.grades.edit', compact('grade', 'teachers', 'students', 'subjects'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'mark' => 'required|string|max:255',
        ]);

        $grade->update($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully');
    }
}
