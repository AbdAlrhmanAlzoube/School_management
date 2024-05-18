<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classRooms = ClassRoom::all();
        return view('Dashboard.admin.pages.class_rooms.index', compact('classRooms'));
    }

    public function create()
    {
        return view('Dashboard.admin.pages.class_rooms.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255', // Updated to 'address' instead of 'title'
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
        ]);

        ClassRoom::create($validatedData);

        return redirect()->route('class_rooms.index')->with('success', 'Class room created successfully');
    }
    public function show(ClassRoom $classRoom)
{
    return view('Dashboard.admin.pages.class_rooms.show', compact('classRoom'));
}

    public function edit(ClassRoom $classRoom)
    {
        return view('Dashboard.admin.pages.class_rooms.edit', compact('classRoom'));
    }

    public function update(Request $request, ClassRoom $classRoom)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
        ]);

        $classRoom->update($validatedData);

        return redirect()->route('class_rooms.index')->with('success', 'Class room updated successfully');
    }

    public function destroy(ClassRoom $classRoom)
    {
        $classRoom->delete();

        return redirect()->route('class_rooms.index')->with('success', 'Class room deleted successfully');
    }
}
