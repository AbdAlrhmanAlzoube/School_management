@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Edit School Mentor</h1>
        <form action="{{ route('school_mentors.update', $schoolMentor->id) }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $schoolMentor->user->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $schoolMentor->user->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $schoolMentor->user->email }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $schoolMentor->user->address }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $schoolMentor->user->phone }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Male" {{ $schoolMentor->user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $schoolMentor->user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="supervising_class">Supervising Class</label>
                <select name="supervising_class" id="supervising_class" class="form-control">
                    <option value="">Select Supervising Class</option>
                    <option value="seventh">Seventh</option>
                    <option value="eighth">Eighth</option>
                    <option value="ninth">Ninth</option>
                </select>
                <small class="text-muted">Leave this field blank if you don't want to update the supervising class.</small>
            </div>
            
            <!-- Add more fields related to school mentors here -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
