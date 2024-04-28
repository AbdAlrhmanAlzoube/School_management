@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>All School Mentors</h1>
        @if($schoolMentors->isEmpty())
            <p>No school mentors found.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Supervising Class</th> <!-- New column -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schoolMentors as $mentor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mentor->user->first_name }}</td>
                            <td>{{ $mentor->user->last_name }}</td>
                            <td>{{ $mentor->user->email }}</td>
                            <td>{{ $mentor->supervising_class }}</td> <!-- New column -->
                            <td>
                                <a href="{{ route('school_mentors.show', $mentor->id) }}" class="btn btn-info btn-sm" title="View Mentor">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('school_mentors.edit', $mentor->id) }}" class="btn btn-primary btn-sm" title="Edit Mentor">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('school_mentors.destroy', $mentor->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Mentor" onclick="return confirm('Are you sure you want to delete this mentor?')">
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
@endsection
