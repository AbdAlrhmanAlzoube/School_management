@extends('Dashboard.schoolMentors.dashboard')

@section('schoolmentors_content')
    <div class="container">
        <h1>All Teachers</h1>
            <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
            <x-form-input name="first_name" placeholder="first_name" class="mx-2" :value="request('first_name')" />
            <button class="btn btn-dark mx-2">Search</button>
        </form>
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
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $teacher->user->first_name }}</td>
                        <td>{{ $teacher->user->last_name }}</td>
                        <td>{{ $teacher->user->email }}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$teachers->links()  }}
@endsection
