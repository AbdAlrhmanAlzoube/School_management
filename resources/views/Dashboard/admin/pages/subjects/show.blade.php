@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Subject Details</h1>
        <div class="card">
            <div class="card-header">
                <h5>{{ $subject->name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $subject->description }}</p>
                <p><strong>Teacher:</strong> 
                    @if($subject->teacher && $subject->teacher->user)
                        {{ $subject->teacher->user->first_name }} {{ $subject->teacher->user->last_name }}
                    @else
                        N/A
                    @endif
                </p>                <!-- Add any additional fields related to subjects here -->
            </div>
        </div>
    </div>
@endsection
