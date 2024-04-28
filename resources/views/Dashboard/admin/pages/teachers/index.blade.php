@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>All Teachers</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $teacher->user->first_name }}</td>
                        <td>{{ $teacher->user->last_name }}</td>
                        <td>{{ $teacher->user->email }}</td>
                        <td>
                            <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info btn-sm" title="View Teacher">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary btn-sm" title="Edit Teacher">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm('Are you sure you want to delete this teacher?')">
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
