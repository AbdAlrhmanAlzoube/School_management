@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Attendance Details</h1>
        <div class="card">
            <div class="card-header">
                <h5>Attendance Record</h5>
            </div>
            <div class="card-body">
                <p><strong>Student Name:</strong> {{ $attendance->student->user->first_name }} {{ $attendance->student->user->last_name }}</p>
                <p><strong>Attendance Date:</strong> {{ $attendance->attendance_date }}</p>
                <p><strong>Attendance Status:</strong> {{ $attendance->attendance_status == 1 ? 'Present' : 'Absent' }}</p>
            </div>
        </div>
    </div>
@endsection
