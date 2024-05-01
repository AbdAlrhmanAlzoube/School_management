<?php


namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AddGradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['teacher', 'student', 'subject'])->get(); // Eager load relationships
        return view('Dashboard.teacher.pages.grades.index', compact('grades'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        $students = Student::all();
        $subjects = Subject::all();
        return view('Dashboard.teacher.pages.grades.add', compact('teachers', 'students', 'subjects'));
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

        return redirect()->route('teacher_grades.index')->with('success', 'Grade created successfully');
    }

    public function show($id)
    {
        $grade = Grade::with(['teacher', 'student', 'subject'])->findOrFail($id); // Fetch grade by ID
        return view('Dashboard.teacher.pages.grades.show', compact('grade'));
    }

    public function edit($id)
    {
        // Find the grade by ID or throw a 404 error if not found
        $grade = Grade::findOrFail($id);

        $teachers = Teacher::all();
        $students = Student::all();
        $subjects = Subject::all();

        // Pass the grade and other data to the view
        return view('Dashboard.teacher.pages.grades.edit', compact('grade', 'teachers', 'students', 'subjects'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'mark' => 'required|string|max:255',
        ]);

        // Find the grade by ID
        $grade = Grade::findOrFail($id);

        // Update the grade with new data
        $grade->update($request->all());

        return redirect()->route('teacher_grades.index')->with('success', 'Grade updated successfully');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('teacher_grades.index')->with('success', 'Grade deleted successfully');
    }
}
