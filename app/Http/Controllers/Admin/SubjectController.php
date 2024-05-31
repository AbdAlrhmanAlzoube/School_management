<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\SubjectStoreRequest;
use App\Http\Requests\SubjectUpdateRequest;

class SubjectController extends Controller
{
    public function index()
    {
        $request=request();
        $subjects = Subject::filterSubjects($request->only('name'))
        ->with('teacher.user')->paginate(10);
        return view('Dashboard.admin.pages.subjects.index', compact('subjects'));
    }

    public function create()
    {
        $teachers=Teacher::all();
        return view('Dashboard.admin.pages.subjects.add',compact('teachers'));
    }

    public function store(SubjectStoreRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create a new subject
        Subject::create($validatedData);
        
        return redirect()->route('subjects.index')->with('success', 'Subject created successfully');
    }

    public function show(Subject $subject)
    {
        return view('Dashboard.admin.pages.subjects.show', compact('subject'));
    }

    public function edit(Subject $subject)
    {
        $users=User::all();
        $teachers=Teacher::all();
        return view('Dashboard.admin.pages.subjects.edit', compact('subject','teachers','users'));
    }

    public function update(SubjectUpdateRequest $request, Subject $subject)
    {
        $validatedData = $request->validated();
        
        // Update the subject
        $subject->update($validatedData);
        
        return redirect()->route('subjects.index')->with('success', 'Subject updated successfully');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete(); // Delete the subject
        return redirect()->route('subjects.index')->with('success', 'Subject deleted successfully');
    }
}
