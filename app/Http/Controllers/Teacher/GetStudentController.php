<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Student;
use App\Http\Controllers\Controller;

class GetStudentController extends Controller
{  public function index()
    {
        $request=request();        
        $students = Student::filterStudents($request->only('first_name'))
        ->paginate(10);;
        return view('Dashboard.teacher.pages.students.index', compact('students'));
    }
}


