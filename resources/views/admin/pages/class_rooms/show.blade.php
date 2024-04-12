@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Class Room Details</h1>
        <div class="card">
            <div class="card-header">
                <h5>{{ $classRoom->address }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Title:</strong> {{ $classRoom->address }}</p>
                <p><strong>Name:</strong> {{ $classRoom->name }}</p>
                <p><strong>Capacity:</strong> {{ $classRoom->capacity }}</p>
                <!-- Additional fields related to class rooms -->
                <!-- Add any additional fields here -->
            </div>
        </div>
    </div>
@endsection
