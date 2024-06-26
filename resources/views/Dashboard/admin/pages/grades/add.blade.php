@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Add Grade</h1>
        <form action="{{ route('grades.store') }}" method="POST">
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
                <label for="teacher_id">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-control" required>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->user->first_name }} {{ $teacher->user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="student_id">Student</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->user->first_name }} {{ $student->user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subject_id">Subject</label>
                <select name="subject_id" id="subject_id" class="form-control" required>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="mark">Mark</label>
                <input type="text" name="mark" id="mark" class="form-control" required>
            </div>
            <!-- Add more fields related to grades here -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
