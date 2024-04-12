@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>All Class Rooms</h1>
        @if($classRooms->isEmpty())
            <p>No class rooms found.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Address</th>
                        <th>Name</th>
                        <th>Capacity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($classRooms as $classRoom)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $classRoom->address }}</td>
                            <td>{{ $classRoom->name }}</td>
                            <td>{{ $classRoom->capacity }}</td>
                            <td>
                                <a href="{{ route('class_rooms.show', $classRoom->id) }}" class="btn btn-info btn-sm" title="View Class Room">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('class_rooms.edit', $classRoom->id) }}" class="btn btn-primary btn-sm" title="Edit Class Room">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('class_rooms.destroy', $classRoom->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Class Room" onclick="return confirm('Are you sure you want to delete this class room?')">
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
