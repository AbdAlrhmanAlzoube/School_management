<?php

namespace Database\Factories;

// database/factories/GuardianFactory.php

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    protected $model = Guardian::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(), // Assuming a Guardian belongs to a User
            // Add other fields as necessary
        ];
    }
}
