<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            'Science',
            'English',
            'Arabic',
            'Sports',
            'Mathematics',
            'Drawing',
            'Social Studies'
        ];

        foreach ($subjects as $subjectName) {
            Subject::factory()->create([
                'name' => $subjectName,
                'description' => substr(fake()->paragraph, 0, 50),
            ]);
        }
    }
}
