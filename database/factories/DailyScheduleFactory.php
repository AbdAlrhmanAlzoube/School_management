<?php

namespace Database\Factories;

use App\Models\DailySchedule;
use App\Models\ClassRoom;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class DailyScheduleFactory extends Factory
{
    protected $model = DailySchedule::class;

    // Track used day names
    private $usedDayNames = [];

    public function definition()
    {
        $weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'];
        $uniqueDays = array_diff($weekdays, $this->usedDayNames);
        $dayName = $this->faker->randomElement($uniqueDays);

        // Add used day name to prevent repetition
        $this->usedDayNames[] = $dayName;

        return [
            'day_name' => $dayName,
            'educational_level' => $this->faker->randomElement(['ninth', 'seventh', 'eighth']),
            'subject_id' => Subject::factory(),
            'teacher_id' => Teacher::factory(),
            'class_room_id' => ClassRoom::factory(),
            'start_time' => $this->faker->time('H:i'),
            'end_time' => $this->faker->time('H:i'),
        ];
    }
}
