@extends('Dashboard.Teacher.teacher_dashboard')

@section('teacher_content')
    <div class="container">
        <h1>All Daily Schedules</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Day Name</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Class Room</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Educational Level</th>
                    <!-- Removed the Actions column -->
                </tr>
            </thead>
            <tbody>
                @foreach($dailySchedules as $dailySchedule)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dailySchedule->day_name }}</td>
                        <td>{{ $dailySchedule->subject->name }}</td>
                        <td>{{ $dailySchedule->teacher->user->first_name }} {{ $dailySchedule->teacher->user->last_name }}</td>
                        <td>{{ $dailySchedule->classRoom->name }}</td>
                        <td>{{ $dailySchedule->start_time }}</td>
                        <td>{{ $dailySchedule->end_time }}</td>
                        <td>{{ $dailySchedule->educational_level }}</td> <!-- Displaying educational level -->
                        <!-- Actions column removed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
