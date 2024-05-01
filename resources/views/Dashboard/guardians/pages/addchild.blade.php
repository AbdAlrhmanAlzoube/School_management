@extends('Dashboard.guardians.guardian_dashboard') <!-- Correctly extending the layout -->

@section('guardian_content') <!-- Ensure this section aligns with the layout -->
<div class="container">
    <h1>Add New Student</h1>

    <form action="{{ route('children.store') }}" method="post" enctype="multipart/form-data"> <!-- Added enctype for file uploads -->
        @csrf
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Profile Image (optional):</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <input type="date" name="birth_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="educational_level">Educational Level:</label>
            <input type="text" name="educational_level" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guardian_id">Guardian:</label>
            <select name="guardian_id" class="form-control" required>
                @foreach ($guardians as $guardian)
                    <option value="{{ $guardian->id }}">{{ $guardian->user->first_name }} {{ $guardian->user->last_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
        <a href="{{ route('children.index') }}" class="btn btn-secondary">Back to Children</a>
    </form>
</div>
@endsection
