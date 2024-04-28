<?php


namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Student;
use App\Models\Guardian;
use Illuminate\Routing\Controller;
use App\Http\Requests\StudentStoreRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Dashboard.Admin.pages.students.index', compact('students'));
    }

    public function create()
    {
        $guardians = Guardian::all();
        return view('Dashboard.Admin.pages.students.add', compact('guardians'));
    }

   
    public function store(StudentStoreRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create a new student
        $user = User::create($validatedData);
        $student = Student::create([
            'user_id' => $user->id,
            'educational_level' => $validatedData['educational_level'] ?? null,
            'guardian_id' => $validatedData['guardian_id'] ?? null,
            'birth_date' => $validatedData['birth_date']?? null,
        ]);
        
        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }
    
    public function show(Student $student)
    {
        return view('Dashboard.Admin.pages.students.show', compact('student'));
    }

    public function edit(Student $student)
{
    $guardians = Guardian::all();
    return view('Dashboard.Admin.pages.students.edit', compact('student', 'guardians'));
}

    public function update(StudentStoreRequest $request, Student $student)
    {
        $validatedData = $request->validated();
        
        // Update the student
        $student->user->update($validatedData);
        $student->update([
            'guardian_id' => $validatedData['guardian_id'],
            'educational_level' => $validatedData['educational_level'],
            'birth_date' => $validatedData['birth_date'],
        ]);
        
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
