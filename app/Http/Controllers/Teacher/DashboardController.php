<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller; // Import Controller for Laravel conventions

class DashboardController extends Controller // Extend from Controller
{
    public function index() // Fix method declaration spacing
    {
        return view('Dashboard.teacher.teacher_dashboard'); // Fix capitalization
    }
}
