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

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
        <x-form-input name="first_name" placeholder="Student First Name" class="mx-2" :value="request('first_name')" />
        <select name="name" class="form-control mx-2">
            <option value="">All Subjects</option>
            <option value="Science" {{ request('name') === 'Science' ? 'selected' : '' }}>Science</option>
            <option value="English" {{ request('name') === 'English' ? 'selected' : '' }}>English</option>
            <option value="Arabic" {{ request('name') === 'Arabic' ? 'selected' : '' }}>Arabic</option>
            <option value="Sports" {{ request('name') === 'Sports' ? 'selected' : '' }}>Sports</option>
            <option value="Mathematics" {{ request('name') === 'Mathematics' ? 'selected' : '' }}>Mathematics</option>
            <option value="Drawing" {{ request('name') === 'Drawing' ? 'selected' : '' }}>Drawing</option>
            <option value="Social Studies" {{ request('name') === 'Social Studies' ? 'selected' : '' }}>Social Studies</option>
        </select>
        <button class="btn btn-dark mx-2">Filter</button>
    </form>
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
                            <a href="{{ route('teacher_grades.show', $grade->id) }}" class="btn btn-info btn-sm" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('teacher_grades.edit', $grade->id) }}" class="btn btn-primary btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('teacher_grades.destroy', $grade->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
{{ $grades->links() }}
@endsection
