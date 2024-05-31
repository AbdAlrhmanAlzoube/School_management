<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory,Filterable;

    protected $fillable = ['teacher_id', 'student_id', 'subject_id', 'mark'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class)->with('user');
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}