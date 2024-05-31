<?php

namespace Database\Seeders;

use App\Models\Grade;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Grade::factory()->count(25)->create();
    }
}
