<?php

namespace Database\Seeders;

use App\Models\Guardian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuardiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guardian::factory()->count(8)->create();

    }
}
