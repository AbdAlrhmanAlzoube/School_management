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
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
