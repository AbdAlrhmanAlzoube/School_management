@extends('Dashboard.schoolMentors.dashboard')

@section('schoolmentors_content')
    <div class="container">
        <h1>All Class Rooms</h1>
        
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Address</th>
                        <th>Name</th>
                        <th>Capacity</th>
                     </tr>
                </thead>
                <tbody>
                    @foreach($classRooms as $classRoom)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $classRoom->address }}</td>
                            <td>{{ $classRoom->name }}</td>
                            <td>{{ $classRoom->capacity }}</td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    {{ $classRooms->links() }}
@endsection
