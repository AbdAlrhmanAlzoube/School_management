@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Add Attendance Record</h1>
        <form action="{{ route('attendances.store') }}" method="POST">
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
                <label for="school_mentor_id">School Mentor</label>
                <select name="school_mentor_id" id="school_mentor_id" class="form-control" required>
                    <option value="">Select School Mentor</option>
                    @foreach($schoolMentors as $mentor)
                        <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="class_room_id">Class Room</label>
                <select name="class_room_id" id="class_room_id" class="form-control" required>
                    <option value="">Select Class Room</option>
                    @foreach($classRooms as $classRoom)
                        <option value="{{ $classRoom->id }}">{{ $classRoom->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="student_id">Student</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    <option value="">Select Student</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="attendance_date">Attendance Date</label>
                <input type="date" name="attendance_date" id="attendance_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="attendance_status">Attendance Status</label>
                <select name="attendance_status" id="attendance_status" class="form-control" required>
                    <option value="1">Present</option>
                    <option value="0">Absent</option>
                </select>
            </div>
            <!-- Add more fields related to attendance here -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
