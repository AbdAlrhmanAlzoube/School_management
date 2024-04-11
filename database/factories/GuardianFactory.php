<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;



class GuardianFactory extends Factory
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

        ];
    }
}
