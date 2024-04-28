@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Edit Daily Schedule</h1>
        <form action="{{ route('daily_schedules.update', $dailySchedule->id) }}" method="POST">
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
                <label for="day_name">Day Name</label>
                <input type="text" name="day_name" id="day_name" class="form-control" value="{{ $dailySchedule->day_name }}" required>
            </div>
            <div class="form-group">
                <label for="subject_id">Select Subject</label>
                <select name="subject_id" id="subject_id" class="form-control" required>
                    <option value="">Select Subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}" @if($subject->id == $dailySchedule->subject_id) selected @endif>{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="teacher_id">Select Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-control" required>
                    <option value="">Select Teacher</option>
                    @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" @if($teacher->id == $dailySchedule->teacher_id) selected @endif>
                        {{ $teacher->user->first_name }} {{ $teacher->user->last_name }}
                    </option>
                @endforeach
                
                </select>
            </div>
            <div class="form-group">
                <label for="class_room_id">Select Class Room</label>
                <select name="class_room_id" id="class_room_id" class="form-control" required>
                    <option value="">Select Class Room</option>
                    @foreach($classrooms as $classroom)
                        <option value="{{ $classroom->id }}" @if($classroom->id == $dailySchedule->class_room_id) selected @endif>{{ $classroom->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="time" name="start_time" id="start_time" class="form-control" value="{{ $dailySchedule->start_time }}" required>
            </div>
            <div class="form-group">
                <label for="end_time">End Time</label>
                <input type="time" name="end_time" id="end_time" class="form-control" value="{{ $dailySchedule->end_time }}" required>
            </div>
            <div class="form-group">
                <label for="educational_level">Educational Level</label>
                <select name="educational_level" id="educational_level" class="form-control" required>
                    <option value="">Select Educational Level</option>
                    <option value="Seventh" {{ $dailySchedule->educational_level == 'Seventh' ? 'selected' : '' }}>Seventh</option>
                    <option value="Eighth" {{ $dailySchedule->educational_level == 'Eighth' ? 'selected' : '' }}>Eighth</option>
                    <option value="Ninth" {{ $dailySchedule->educational_level == 'Ninth' ? 'selected' : '' }}>Ninth</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
