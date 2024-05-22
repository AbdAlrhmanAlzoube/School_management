<?php

namespace Database\Seeders;

use App\Models\DailySchedule;
use Illuminate\Database\Seeder;

class DailyScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DailySchedule::factory()->count(5)->create();
    }
}
