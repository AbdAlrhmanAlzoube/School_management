@extends('Dashboard.teacher.teacher_dashboard')

@section('teacher_content')
    <div class="container">
        <h1>All Attendance Records</h1>
        <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
            <x-form-input name="first_name" placeholder="First Name" class="mx-2" :value="request('first_name')" />
            <select name="attendance_status" class="form-control mx-2">
                <option value="">All</option>
                <option value="Present" @selected(request('attendance_status') === 'Present')>Present</option>
                <option value="Absent" @selected(request('attendance_status') === 'Absent')>Absent</option>
            </select>
            <button class="btn btn-dark mx-2">Filter</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Attendance Date</th>
                    <th>Attendance Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $attendance->student->user->first_name }} {{ $attendance->student->user->last_name }}</td>
                        <td>{{ $attendance->attendance_date }}</td>
                        <td>{{ $attendance->attendance_status ? 'Present' : 'Absent' }}</td>
                        <td>
                            <a href="{{ route('attendances.show', $attendance->id) }}" class="btn btn-info btn-sm" title="View Attendance">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-primary btn-sm" title="Edit Attendance">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Attendance" onclick="return confirm('Are you sure you want to delete this attendance record?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $attendances->links() }}
    </div>
@endsection
