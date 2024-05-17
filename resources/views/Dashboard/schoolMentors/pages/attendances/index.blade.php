@extends('Dashboard.schoolMentors.dashboard')

@section('schoolmentors_content')
    <div class="container">
        <h1>All Attendance Records</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Attendance Date</th>
                    <th>Attendance Status</th>
                    {{-- <th>Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $attendance->student->user->first_name }} {{ $attendance->student->user->last_name }}</td>
                        <td>{{ $attendance->attendance_date }}</td>
                        <td>{{ $attendance->attendance_status == 1 ? 'Present' : 'Absent' }}</td>
                        {{-- <td>
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
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
