<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeFilter(Builder $builder, $filters)
    {
        $builder->when($filters['first_name'] ?? false, function ($builder, $value) {
            $builder->where('first_name', 'like', "%{$value}%");
        });

        $builder->when($filters['gender'] ?? false, function ($builder, $value) {
            $builder->where('gender', '=', $value);
        });

       
    }
    public function scopeFilterStudents(Builder $builder, $filters)
    {
        $builder->when($filters['first_name'] ?? false, function ($builder, $value) {
            $builder->whereHas('user', function ($query) use ($value) {
                $query->where('first_name', 'like', "%{$value}%");
            });
        });

        $builder->when($filters['educational_level'] ?? false, function ($builder, $value) {
            $builder->where('educational_level', '=', $value);
        });
    }
    public function scopeFilterTeachers(Builder $builder, $filters)
    {
        $builder->when($filters['first_name'] ?? false, function ($builder, $value) {
            $builder->whereHas('user', function ($query) use ($value) {
                $query->where('first_name', 'like', "%{$value}%");
            });
        });

    }
    public function scopeFilterGuardians(Builder $builder, $filters)
    {
        $builder->when($filters['first_name'] ?? false, function ($builder, $value) {
            $builder->whereHas('user', function ($query) use ($value) {
                $query->where('first_name', 'like', "%{$value}%");
            });
        });

    }
    public function scopeFilterSubjects(Builder $builder, $filters)
    {
        $builder->when($filters['name'] ?? false, function ($builder, $value) {
                $builder->where('name', 'like', "%{$value}%");
            });
        

    }
    public function scopeFilterSchoolMentors(Builder $builder, $filters)
    {
        $builder->when($filters['first_name'] ?? false, function ($builder, $value) {
            $builder->whereHas('user', function ($query) use ($value) {
                $query->where('first_name', 'like', "%{$value}%");
            });
        });

        $builder->when($filters['supervising_class'] ?? false, function ($builder, $value) {
                $builder->where('supervising_class', '=', $value);
        });
    }
    public function scopeFilterGrades(Builder $builder, $filters)
    {
        $builder->when($filters['first_name'] ?? false, function ($builder, $value) {
            $builder->whereHas('student.user', function ($query) use ($value) {
                $query->where('first_name', 'like', "%{$value}%");
            });
        });
        $builder->when($filters['name'] ?? false, function ($builder, $value) {

            $builder->whereHas('subject',function($query) use ($value)
            {
                $query->where('name', '=', $value);
            });
          
                
          
        });
    }
    public function scopeFilterAttendances(Builder $builder, $filters)
    {
        $builder->when($filters['first_name'] ?? false, function ($builder, $value) {
            $builder->whereHas('student.user', function ($query) use ($value) {
                $query->where('first_name', 'like', "%{$value}%");
            });
        });

        $builder->when($filters['attendance_status'] ?? false, function ($builder, $value) {
            $status = $value === 'Present' ? 1 : ($value === 'Absent' ? 0 : null);
            if ($status !== null) {
                $builder->where('attendance_status', '=', $status);
            }
        });
    }
    public function scopeFilterAdvertisements(Builder $builder, $filters)
    {
        $builder->when($filters['status'] ?? false, function ($builder, $value) {
                $builder->where('status', '=', $value);
            
        });
    }
}
