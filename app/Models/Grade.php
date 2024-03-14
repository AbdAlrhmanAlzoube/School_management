<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'student_id', 'subject_id', 'mark'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Define the belongsTo relationship with Student model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Define the belongsTo relationship with Subject model
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
