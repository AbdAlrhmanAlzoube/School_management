<?php

namespace Database\Seeders;

use App\Models\SchoolMentor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolMentorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
      
            SchoolMentor::factory()->count(2)->create();
       
    }
}
