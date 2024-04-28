<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Student;
use App\Http\Controllers\Controller;

class GetStudentController extends Controller
{  public function index()
    {
        $students = Student::all();
        return view('Dashboard.teacher.pages.students.index', compact('students'));
    }
}


