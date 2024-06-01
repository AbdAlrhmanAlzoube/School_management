@extends('Dashboard.schoolMentors.dashboard')

@section('schoolmentors_content')
    <div class="container">
        <h1>All Guardians</h1>
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
                    {{-- <th>Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($guardians as $guardian)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $guardian->user->first_name }}</td>
                        <td>{{ $guardian->user->last_name }}</td>
                        <td>{{ $guardian->user->email }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $guardians->links() }}
@endsection
