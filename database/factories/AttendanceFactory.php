<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;


class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => Teacher::inRandomOrder()->first()->id,
            'student_id' => Student::inRandomOrder()->first()->id,
            'attendance_status' => $this->faker->boolean(),
            'attendance_date' => $this->faker->date(),
           
        ];
    }
}
