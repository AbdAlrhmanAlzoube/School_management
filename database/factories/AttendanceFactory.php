<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\ClassRoom;
use App\Models\SchoolMentor;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition()
    {
        return [
            'school_mentor_id' => SchoolMentor::factory(),
            'class_room_id' => ClassRoom::factory(),
            'student_id' => Student::factory(),
            'attendance_date' => $this->faker->date(),
            'attendance_status' => $this->faker->boolean(),
        ];
    }
}
