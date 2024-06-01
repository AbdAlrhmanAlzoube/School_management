<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory,Filterable;

    protected $fillable = [
        'student_id',
        'school_mentor_id',
        'class_room_id',
        'attendance_date',
        'attendance_status' 
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function schoolMentor()
    {
        return $this->belongsTo(SchoolMentor::class);
    }

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
