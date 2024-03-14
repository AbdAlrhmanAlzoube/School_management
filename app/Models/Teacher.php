<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
        'subject_id',
        'experience_years',
        'subject_name'
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
    
        // Define the hasMany relationship with Attendance model
        public function attendances()
        {
            return $this->hasMany(Attendance::class);
        }
    
        // Define the hasMany relationship with Grade model
        public function grades()
        {
            return $this->hasMany(Grade::class);
        }

}
