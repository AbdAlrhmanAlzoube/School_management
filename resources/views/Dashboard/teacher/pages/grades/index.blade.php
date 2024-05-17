@extends('Dashboard.Teacher.teacher_dashboard')

@section('teacher_content')
<div class="container">
    <h1>All Grades</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if($grades->isEmpty())
        <p>No grades found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Teacher</th>
                    <th>Student</th>
                    <th>Subject</th>
                    <th>Mark</th>
                    <th>Actions</th>
                </tr>
            </thead>
         
            <tbody>
                @foreach($grades as $grade)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $grade->teacher->user->first_name }} {{ $grade->teacher->user->last_name }}</td>
                        <td>{{ $grade->student->user->first_name }} {{ $grade->student->user->last_name }}</td>
                        <td>{{ $grade->subject->name }}</td>
                        <td>{{ $grade->mark }}</td>
                        <td>
                            <a href="{{ route('teacher_grades.show', $grade->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('teacher_grades.edit', $grade->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('teacher_grades.destroy', $grade->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
