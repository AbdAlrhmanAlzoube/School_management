@extends('Dashboard.Admin.admin_dashboard')

    @section('content')
        <div class="container">
            <h1>Teacher Details</h1>
            <div class="card">
                <div class="card-header">
                    <h5>{{ $teacher->user->first_name }} {{ $teacher->user->last_name }}</h5>
                </div>
                <div class="card-body">
                    <p><strong>Email:</strong> {{ $teacher->user->email }}</p>
                    <p><strong>Address:</strong> {{ $teacher->user->address }}</p>
                    <p><strong>Phone:</strong> {{ $teacher->user->phone }}</p>
                    <p><strong>Gender:</strong> {{ $teacher->user->gender }}</p>
                    <p><strong>Experience Years:</strong> {{ $teacher->experience_years }}</p>
                    <p><strong>Age:</strong> {{ $teacher->age }}</p>
                </div>
            </div>
        </div>
    @endsection
