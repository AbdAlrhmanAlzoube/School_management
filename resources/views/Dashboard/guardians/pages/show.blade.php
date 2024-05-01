@extends('Dashboard.guardians.guardian_dashboard') <!-- Correctly extending the layout -->

@section('guardian_content') <!-- Ensure this section aligns with the layout -->
<div class="container">
    <h1>Student Details</h1>

    <div class="student-info">
        <p><strong>Full Name:</strong> {{ $student->user->first_name }} {{ $student->user->last_name }}</p>
        <p><strong>Birth Date:</strong> {{ $student->birth_date }}</p>
        <p><strong>Educational Level:</strong> {{ $student->educational_level }}</p>
        <p><strong>Address:</strong> {{ $student->user->address }}</p>
        <p><strong>Phone:</strong> {{ $student->user->phone }}</p>
    </div>

    <div class="guardian-info">
        <h2>Guardian Information</h2>
        <p><strong>Full Name:</strong> {{ $student->guardian->user->first_name }} {{ $student->guardian->user->last_name }}</p>
        <p><strong>Address:</strong> {{ $student->guardian->user->address }}</p>
        <p><strong>Phone:</strong> {{ $student->guardian->user->phone }}</p>
    </div>

    <a href="{{ route('children.index') }}" class="btn btn-primary">Back to Children</a>
</div>
@endsection
