@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Add Student</h1>
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="guardian_id">Select Guardian</label>
                <select name="guardian_id" id="guardian_id" class="form-control" required>
                    <option value="">Select Guardian</option>
                    @foreach($guardians as $guardian)
                        <option value="{{ $guardian->id }}">{{ $guardian->user->first_name }} {{ $guardian->user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="educational_level">Educational Level</label>
                <select name="educational_level" id="educational_level" class="form-control" required>
                    <option value="Seventh">Seventh</option>
                    <option value="Eighth">Eighth</option>
                    <option value="Ninth">Ninth</option>
                </select>
            </div>
            
            
            
            <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
