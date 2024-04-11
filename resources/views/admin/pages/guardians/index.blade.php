@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>All Guardians</h1>
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
                @foreach($guardians as $guardian)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $guardian->user->first_name }}</td>
                        <td>{{ $guardian->user->last_name }}</td>
                        <td>{{ $guardian->user->email }}</td>
                        <td>
                            <a href="{{ route('guardians.show', $guardian->id) }}" class="btn btn-info btn-sm" title="View Guardian">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('guardians.edit', $guardian->id) }}" class="btn btn-primary btn-sm" title="Edit Guardian">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('guardians.destroy', $guardian->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Guardian" onclick="return confirm('Are you sure you want to delete this guardian?')">
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
