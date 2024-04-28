



@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>User Details</h1>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>First Name:</strong> {{ $user->first_name }}</li>
                <li class="list-group-item"><strong>Last Name:</strong> {{ $user->last_name }}</li>
                <li class="list-group-item"><strong>Address:</strong> {{ $user->address }}</li>
                <li class="list-group-item"><strong>Phone:</strong> {{ $user->phone }}</li>
                <li class="list-group-item"><strong>Gender:</strong> {{ $user->gender }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                <!-- You can display more user details here -->
                <li class="list-group-item"><strong>Image:</strong> <img src="{{ asset($user->image) }}" alt="User Image" style="max-width: 100px;"></li>

            </ul>
        </div>
    </div>
    
@endsection
