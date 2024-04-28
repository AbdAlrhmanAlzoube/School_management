<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Guardian;
use Illuminate\Routing\Controller;
use App\Http\Requests\GuardianStoreRequest;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();
        return view('Dashboard.Admin.pages.guardians.index', compact('guardians'));
    }

    public function create()
    {
        return view('Dashboard.Admin.pages.guardians.add');
    }

    public function store(GuardianStoreRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create a new guardian
        $user = User::create($validatedData);
        $guardian = Guardian::create([
            'user_id' => $user->id,
            // Add any other fields related to guardianship here
        ]);
        
        
        return redirect()->route('guardians.index')->with('success', 'Guardian created successfully');
    }

    public function show(Guardian $guardian)
    {
        return view('Dashboard.Admin.pages.guardians.show', compact('guardian'));
    }

    public function edit(Guardian $guardian)
    {
        return view('Dashboard.Admin.pages.guardians.edit', compact('guardian'));
    }

    public function update(GuardianStoreRequest $request, Guardian $guardian)
    {
        $validatedData = $request->validated();
        
        // Update the guardian
        $guardian->user->update($validatedData); // Update related user info if necessary
        // Update other guardian specific fields if necessary
        
        return redirect()->route('guardians.index')->with('success', 'Guardian updated successfully');
    }

    public function destroy(Guardian $guardian)
    {
        $guardian->user->delete(); // Delete related user info
        $guardian->delete(); // Delete guardian
        return redirect()->route('guardians.index')->with('success', 'Guardian deleted successfully');
    }
}
