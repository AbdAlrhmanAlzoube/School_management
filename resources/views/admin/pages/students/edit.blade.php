@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
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
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $student->user->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $student->user->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $student->user->email }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $student->user->address }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->user->phone }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Male" @if($student->user->gender == 'Male') selected @endif>Male</option>
                    <option value="Female" @if($student->user->gender == 'Female') selected @endif>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="educational_level">Educational Level</label>
                <input type="text" name="educational_level" id="educational_level" class="form-control" value="{{ $student->educational_level }}" required>
            </div>
            <div class="form-group">
                <label for="guardian_id">Guardian</label>
                <select name="guardian_id" id="guardian_id" class="form-control" required>
                    @foreach($guardians as $guardian)
                        <option value="{{ $guardian->id }}" @if($guardian->id == $student->guardian_id) selected @endif>{{ $guardian->user->first_name }} {{ $guardian->user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="birth_date">Birthdate</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ $student->birthdate }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
