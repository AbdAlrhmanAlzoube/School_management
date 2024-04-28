@extends('Dashboard.teacher.teacher_dashboard')

@section('teacher_content')
    <div class="container">
        <h1>All Students</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->user->first_name }}</td>
                        <td>{{ $student->user->last_name }}</td>
                        <td>{{ $student->user->email }}</td>
                        {{-- <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm" title="View Student">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm" title="Edit Student">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Are you sure you want to delete this student?')">
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
