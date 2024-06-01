@extends('Dashboard.schoolMentors.dashboard')

@section('schoolmentors_content')
    <div class="container">
        <h1>All Students</h1>
        <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
            <x-form-input name="first_name" placeholder="first_name" class="mx-2" :value="request('first_name')" />
            <select name="educational_level" class="form-control mx-2">
              <option value="">All</option>
              <option  value="seventh"@selected(request('educational_level')==='seventh')>seventh</option>
            <option value="ninth" @selected(request('educational_level')==='ninth')>ninth</option>
              <option value="eighth"@selected(request('educational_level')==='eighth')>eighth</option>
            </select><br>
            <button class="btn btn-dark mx-2">Filter</button>
          </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Educational Level</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->user->first_name }}</td>
                        <td>{{ $student->user->last_name }}</td>
                        <td>{{ $student->user->email }}</td>
                        <td>{{ $student->educational_level }}</td>
                    
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $students->links()  }}
@endsection
