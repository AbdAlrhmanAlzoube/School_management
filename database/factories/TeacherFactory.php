<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'experience_years' => $this->faker->numberBetween(1, 30), // Assuming experience years range from 1 to 30
            'age' => $this->faker->numberBetween(24, 60), // Assuming experience years range from 1 to 30
        ];
    }
}
