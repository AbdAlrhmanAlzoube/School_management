<?php

namespace App\Http\Controllers\Guardian;

use App\Models\User;
use App\Models\Student;
use App\Models\Guardian;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GuardianChildController extends Controller
{

    public function index()
    {
        // Get all students, along with their associated user and guardian
        $students = Student::with('user', 'guardian.user')->get();
        return view('Dashboard.guardians.pages.index', compact('students'));
    }
    public function create()
    {
        $guardians = Guardian::with('user')->get();
        return view('Dashboard.guardians.pages.addchild', compact('guardians'));
    }
    
    public function show($id)
    {
        $student = Student::with('user', 'guardian.user')->findOrFail($id);
        return view('Dashboard.guardians.pages.show', compact('student'));
    }
    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'educational_level' => 'required|string|max:255',
            'guardian_id' => 'required|exists:guardians,id',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8', // Minimum 8 characters for passwords
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image upload validations
        ]);
    
        // Create a new user for the student
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => strtolower($request->first_name . '.' . $request->last_name) . '@example.com', // or another method for email
            'password' => bcrypt($request->password), // Use the provided password
            'address' => $request->address,
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);
    
        // If there's an image, handle the file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('student_images', 'public'); // Store image in public disk
        }
    
        // Create the student record
        $student = Student::create([
            'user_id' => $user->id,
            'guardian_id' => $request->guardian_id,
            'educational_level' => $request->educational_level,
            'birth_date' => $request->birth_date,
            'image' => $imagePath, // Store the image path if available
        ]);
    
        // Redirect to the student details page after storing the new student
        return redirect()->route('children.show', ['child' => $student->id])->with('success', 'Student added successfully.');
    }
    public function destroy($id)
{
    $student = Student::findOrFail($id); // Ensure the student exists
    $student->delete(); // Delete the student

    return redirect()->route('children.index')->with('success', 'Student deleted successfully.');
}

    


   
}
