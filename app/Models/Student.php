<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
      'user_id',
        'subject_id',
        'attendance_id',
        'teacher_id',
        'class_room_id',
        'guardian_id',
        'educational_level',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the belongsTo relationship with Subject model
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // Define the belongsTo relationship with Attendance model
    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

    // Define the belongsTo relationship with Teacher model
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Define the belongsTo relationship with ClassRoom model
    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    // Define the belongsTo relationship with Guardian model
    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }

    // Define the hasMany relationship with Grade model
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

}
