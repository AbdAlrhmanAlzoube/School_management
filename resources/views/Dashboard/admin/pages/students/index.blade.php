@extends('Dashboard.Admin.admin_dashboard')

@section('content')
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
                    <th>Educational Level</th> <!-- New column header -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->user->first_name }}</td>
                        <td>{{ $student->user->last_name }}</td>
                        <td>{{ $student->user->email }}</td>
                        <td>{{ $student->educational_level }}</td> <!-- Display educational level -->
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm" title="View Student">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm" title="Edit Student">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Are you sure you want to delete this student?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $students->links() }}
@endsection
