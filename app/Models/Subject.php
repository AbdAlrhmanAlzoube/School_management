<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Subject extends Model
    {
        use HasFactory;

        protected $fillable = ['teacher_id', 'name', 'description','lesson_time'];

        public function teacher()
        {
            return $this->belongsTo(Teacher::class);
        }

        // Define the belongsToMany relationship with Grade model
        public function grades()
        {
            return $this->belongsToMany(Grade::class);
        }
    }
