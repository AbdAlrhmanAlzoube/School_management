<?php

    namespace Database\Seeders;

    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            $this->call([
                UsersTableSeeder::class,
//                 ClassRoomSeeder::class,
//                SubjectsTableSeeder::class,
//
//                TeachersTableSeeder::class,
//
//                GradesTableSeeder::class,
//
//                //  GuardiansTableSeeder::class,
//                 StudentsTableSeeder::class,
//                 AttendancesTableSeeder::class,
//                 SchoolMentorsTableSeeder::class,
//                 StudentsTableSeeder::class,
            ]);
        }
    }
