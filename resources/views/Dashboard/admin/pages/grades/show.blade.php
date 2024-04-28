@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Grade Details</h1>
        <div class="card">
            <div class="card-header">
                <h5>{{ $grade->teacher->user->first_name }} {{ $grade->teacher->user->last_name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Teacher:</strong> {{ $grade->teacher->user->first_name }} {{ $grade->teacher->user->last_name }}</p>
                <p><strong>Student:</strong> {{ $grade->student->user->first_name }} {{ $grade->student->user->last_name }}</p>
                <p><strong>Subject:</strong> {{ $grade->subject->name }}</p>
                <p><strong>Mark:</strong> {{ $grade->mark }}</p>
                <!-- Additional fields related to grades -->
                <!-- Add any additional fields here -->
            </div>
        </div>
    </div>
@endsection
