<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    public function run(): void
    {

        User::factory()->create([
            'email' => 'ahmad@teacher.com',
        ]) ;
        User::factory()->create([
            'email' => 'ahmad@student.com',
        ]);
         User::factory()->create([
            'email' => 'ahmad@admin.com',
        ]);
         User::factory()->create([
            'email' => 'ahmad@guardian.com',
        ]);
        User::factory()->create([
            'email' => 'ahmad@schoolmentor.com',
        ]);
        User::factory()->count(25)->create();
    }
    
}
