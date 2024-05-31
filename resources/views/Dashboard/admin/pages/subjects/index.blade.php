@extends('Dashboard.Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>All Subjects</h1>
        <div class="table-responsive">
            <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
                <x-form-input name="name" placeholder="name" class="mx-2" :value="request('name')" />
                <button class="btn btn-dark mx-2">Search</button>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->description }}</td>
                            <td>
                                @if($subject->teacher && $subject->teacher->user)
                                    {{ $subject->teacher->user->first_name }} {{ $subject->teacher->user->last_name }}
                                @else
                                    N/A
                                @endif
                            </td>                  
                            <td>
                                <a href="{{ route('subjects.show', $subject->id) }}" class="btn btn-info btn-sm" title="View Subject">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-primary btn-sm" title="Edit Subject">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Subject" onclick="return confirm('Are you sure you want to delete this subject?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $subjects->links() }}
@endsection
