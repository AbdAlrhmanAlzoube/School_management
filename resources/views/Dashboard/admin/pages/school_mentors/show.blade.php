@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>School Mentor Details</h1>
        <div class="card">
            <div class="card-header">
                <h5>{{ $schoolMentor->user->first_name }} {{ $schoolMentor->user->last_name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $schoolMentor->user->email }}</p>
                <p><strong>Address:</strong> {{ $schoolMentor->user->address }}</p>
                <p><strong>Phone:</strong> {{ $schoolMentor->user->phone }}</p>
                <p><strong>Gender:</strong> {{ $schoolMentor->user->gender }}</p>
                <!-- Additional fields related to school mentors -->
                <!-- For example, if there is an additional field called 'Supervising Class' -->
                <p><strong>Supervising Class:</strong> {{ $schoolMentor->supervising_class }}</p>
            </div>
        </div>
    </div>
@endsection
