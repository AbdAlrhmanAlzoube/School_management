@extends('Admin.admin_dashboard')

@section('content')

    <div class="container">

        <h1>Daily Schedule Details</h1>

        <div class="card">

            <div class="card-header">

                <h5>{{ $dailySchedule->day_name }}</h5>

            </div>

            <div class="card-body">

                <p><strong>Subject:</strong> {{ $dailySchedule->subject->name }}</p>

                <p><strong>Teacher:</strong> {{ $dailySchedule->teacher->user->first_name }} {{ $dailySchedule->teacher->user->last_name }}</p>

                <p><strong>Class Room:</strong> {{ $dailySchedule->classRoom->name }}</p>

                <p><strong>Start Time:</strong> {{ $dailySchedule->start_time }}</p>

                <p><strong>End Time:</strong> {{ $dailySchedule->end_time }}</p>

            </div>

        </div>

    </div>

@endsection
