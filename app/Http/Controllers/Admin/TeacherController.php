<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use App\Models\Teacher;
use Illuminate\Routing\Controller;
use App\Http\Requests\TeacherStoreRequest;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('Dashboard.Admin.pages.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('Dashboard.Admin.pages.teachers.add');
    }

    public function store(TeacherStoreRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create a new teacher
        $user = User::create($validatedData);
        $teacher = Teacher::create([
            'user_id' => $user->id,
            'experience_years' => $validatedData['experience_years'],
            'age' => $validatedData['age'],
            // 'password' => $validatedData['password'] ?? null,
        ]);
        
        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully');
    }

    public function show(Teacher $teacher)
    {
        return view('Admin.pages.teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('Dashboard.Admin.pages.teachers.edit', compact('teacher'));
    }

    public function update(TeacherStoreRequest $request, Teacher $teacher)
    {
        $validatedData = $request->validated();
        
        // Update the teacher
        $teacher->update([
            'experience_years' => $validatedData['experience_years'],
            'age' => $validatedData['age'],
        ]);
        
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
