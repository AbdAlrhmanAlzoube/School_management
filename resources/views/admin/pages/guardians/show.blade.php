@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Guardian Details</h1>
        <div class="card">
            <div class="card-header">
                <h5>{{ $guardian->user->first_name }} {{ $guardian->user->last_name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $guardian->user->email }}</p>
                <p><strong>Address:</strong> {{ $guardian->user->address }}</p>
                <p><strong>Phone:</strong> {{ $guardian->user->phone }}</p>
                <p><strong>Gender:</strong> {{ $guardian->user->gender }}</p>
                <!-- Add any additional fields related to guardians here -->
            </div>
        </div>
    </div>
@endsection
