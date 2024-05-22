<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class SchoolMentorFactory extends Factory
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
            'supervising_class' => $this->faker->word(),


        ];
    }
}
