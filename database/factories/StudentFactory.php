<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Create a new User or reference an existing one
            'guardian_id' => Guardian::factory(), // Create a new Guardian or reference an existing one
            'educational_level' => $this->faker->randomElement(['primary', 'secondary', 'tertiary']),
            'birth_date' => $this->faker->date(),
        ];
    }
}
