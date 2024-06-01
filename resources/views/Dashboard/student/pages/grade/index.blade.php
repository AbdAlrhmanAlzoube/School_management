@extends('Dashboard.student.dashboard')

@section('student_content')
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
                             
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    {{ $grades->links() }}
@endsection
