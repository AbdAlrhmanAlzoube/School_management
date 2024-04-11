<?php

namespace Database\Seeders;

use App\Models\Guardian;
use Database\Factories\GuardianFactory;
use Illuminate\Database\Seeder;

class GuardiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guardian::factory()->count(5)->create();

    }
}
