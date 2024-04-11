<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Guardian;
use App\Models\ClassRoom;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'guardian_id' => Guardian::inRandomOrder()->first()->id,
            'educational_level' => $this->faker->randomElement(['Seventh ', 'Eighth ', 'Ninth']),
        ];
    }
}
