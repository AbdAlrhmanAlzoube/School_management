@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>All Daily Schedules</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Day Name</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Class Room</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dailySchedules as $dailySchedule)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dailySchedule->day_name }}</td>
                        <td>{{ $dailySchedule->subject->name }}</td>
                        <td>{{ $dailySchedule->teacher->user->first_name }} {{ $dailySchedule->teacher->user->last_name }}</td>
                        <td>{{ $dailySchedule->classRoom->name }}</td>
                        <td>{{ $dailySchedule->start_time }}</td>
                        <td>{{ $dailySchedule->end_time }}</td>
                        <td>
                            <a href="{{ route('daily_schedules.show', $dailySchedule->id) }}" class="btn btn-info btn-sm" title="View Daily Schedule">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('daily_schedules.edit', $dailySchedule->id) }}" class="btn btn-primary btn-sm" title="Edit Daily Schedule">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('daily_schedules.destroy', $dailySchedule->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Daily Schedule" onclick="return confirm('Are you sure you want to delete this daily schedule?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
