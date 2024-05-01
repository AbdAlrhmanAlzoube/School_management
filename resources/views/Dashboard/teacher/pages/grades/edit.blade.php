@extends('Dashboard.Teacher.teacher_dashboard')

@section('teacher_content')
<div class="container">
    <h1>Edit Grade</h1>

    <!-- Form for editing a grade -->
    <form action="{{ route('teacher_grades.update', $grade->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use the correct HTTP method for updating -->

        <!-- Display validation errors if any -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Teacher selection field -->
        <div class="form-group">
            <label for="teacher_id">Teacher</label>
            <select name="teacher_id" id="teacher_id" class="form-control" required>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $grade->teacher_id == $teacher->id ? 'selected' : '' }}>
                        {{ $teacher->user->first_name }} {{ $teacher->user->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Student selection field -->
        <div class="form-group">
            <label for="student_id">Student</label>
            <select name="student_id" id="student_id" class="form-control" required>
                @foreach($students as $student)
                    <option value="{{ $student->id }}" {{ $grade->student_id == $student->id ? 'selected' : '' }}>
                        {{ $student->user->first_name }} {{ $student->user->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Subject selection field -->
        <div class="form-group">
            <label for="subject_id">Subject</label>
            <select name="subject_id" id="subject_id" class="form-control" required>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $grade->subject_id == $subject->id ? 'selected' : '' }}>
                        {{ $subject->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Mark input field -->
        <div class="form-group">
            <label for="mark">Mark</label>
            <input type="text" name="mark" id="mark" class="form-control" required value="{{ $grade->mark }}">
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Update Grade</button>
    </form>
</div>
@endsection
