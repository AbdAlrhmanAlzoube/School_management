<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\SchoolMentor;
use Illuminate\Routing\Controller;
use App\Http\Requests\SchoolMentorStoreRequest;

class SchoolMentorController extends Controller
{
    public function index()
    {
        $schoolMentors = SchoolMentor::all();
        return view('Dashboard.Admin.pages.school_mentors.index', compact('schoolMentors'));
    }

    public function create()
    {
        $supervisingClasses = ['seventh', 'eighth', 'ninth'];

        return view('Dashboard.Admin.pages.school_mentors.add', compact('supervisingClasses'));
    }

    public function store(SchoolMentorStoreRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create a new school mentor
        $user = User::create($validatedData);
        $schoolMentor = SchoolMentor::create([
            'user_id' => $user->id,
            'supervising_class' => $validatedData['supervising_class'], 
            // Add any other fields related to school mentors here
        ]);
        
        return redirect()->route('school_mentors.index')->with('success', 'School mentor created successfully');
    }

    public function show(SchoolMentor $schoolMentor)
    {
        return view('Admin.pages.school_mentors.show', compact('schoolMentor'));
    }

    public function edit(SchoolMentor $schoolMentor)
    {
        return view('Dashboard.Admin.pages.school_mentors.edit', compact('schoolMentor'));
    }

    public function update(SchoolMentorStoreRequest $request, SchoolMentor $schoolMentor)
    {
        $validatedData = $request->validated();
        
        // Update the school mentor
        $schoolMentor->user->update($validatedData); // Update related user info if necessary
        // Update other school mentor specific fields if necessary
        
        return redirect()->route('school_mentors.index')->with('success', 'School mentor updated successfully');
    }

    public function destroy(SchoolMentor $schoolMentor)
    {
        $schoolMentor->user->delete(); // Delete related user info
        $schoolMentor->delete(); // Delete school mentor
        return redirect()->route('school_mentors.index')->with('success', 'School mentor deleted successfully');
    }
}
