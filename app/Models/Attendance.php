<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
    'attendance_date',
    'attendance_status' 
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Define the belongsTo relationship with Student model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Define the belongsTo relationship with SchoolMentor model
    public function schoolMentor()
    {
        return $this->belongsTo(SchoolMentor::class);
    }
}
