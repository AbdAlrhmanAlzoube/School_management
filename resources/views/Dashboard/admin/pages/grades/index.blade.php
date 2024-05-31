@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>All Grades</h1>
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
                                <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-info btn-sm" title="View Grade">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-primary btn-sm" title="Edit Grade">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Grade" onclick="return confirm('Are you sure you want to delete this grade?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
    </div>
    {{ $grades->links() }}
@endsection
