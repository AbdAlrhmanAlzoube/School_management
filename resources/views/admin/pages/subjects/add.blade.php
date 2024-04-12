@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Add Subject</h1>
        <form action="{{ route('subjects.store') }}" method="POST">
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
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="teacher_id">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-control" required>
                    <!-- Populate options with teachers from the database -->
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->user->first_name }}{{ $teacher->user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Add more fields related to subjects here -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
