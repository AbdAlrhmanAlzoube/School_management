<?php

use App\Models\ClassRoom;
use App\Models\SchoolMentor;
use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SchoolMentor::class);
            $table->foreignIdFor(ClassRoom::class);
            $table->foreignIdFor(Student::class);

            $table->date('attendance_date');
            $table->boolean('attendance_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
}
