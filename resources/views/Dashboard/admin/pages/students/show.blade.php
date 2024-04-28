@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Student Details</h1>
        <div class="card">
            <div class="card-header">
                <h5>{{ $student->user->first_name }} {{ $student->user->last_name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $student->user->email }}</p>
                <p><strong>Address:</strong> {{ $student->user->address }}</p>
                <p><strong>Phone:</strong> {{ $student->user->phone }}</p>
                <p><strong>Gender:</strong> {{ $student->user->gender }}</p>
                
                <p><strong>Educational Level:</strong> {{ $student->educational_level }}</p>
                <p><strong>Birthdate:</strong> {{ $student->birth_date }}</p>
            </div>
        </div>
    </div>
@endsection
