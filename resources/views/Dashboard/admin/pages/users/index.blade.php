@extends('Dashboard.Admin.admin_dashboard')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">All Users</h1>
            <div class="table-responsive pt-3">
                
<form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
    <x-form-input name="first_name" placeholder="first_name" class="mx-2" :value="request('first_name')" />
    <select name="gender" class="form-control mx-2">
      <option value="">All</option>
      <option value="male" @selected(request('gander')==='male')>Male</option>
      <option value="female"@selected(request('gander')==='female')>Female</option>
    </select><br>
    <button class="btn btn-dark mx-2">Filter</button>
  </form>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;">ID</th>
                            <th style="text-align: center;">First Name</th>
                            <th style="text-align: center;">Last Name</th>
                            <th style="text-align: center;">Address</th>
                            <th style="text-align: center;">Phone</th>
                            <th style="text-align: center;">Gender</th>
                            <th style="text-align: center;">Email</th>
                            {{-- <th style="text-align: center;">Image</th> <!-- New column for image --> --}}
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td style="text-align: center;">{{ $user->id }}</td>
                            <td style="text-align: center;">{{ $user->first_name }}</td>
                            <td style="text-align: center;">{{ $user->last_name }}</td>
                            <td style="text-align: center;">{{ $user->address }}</td>
                            <td style="text-align: center;">{{ $user->phone }}</td>
                            <td style="text-align: center;">{{ $user->gender }}</td>
                            <td style="text-align: center;">{{ $user->email }}</td>
                        

                            <td style="text-align: center;">
                                <div class="btn-group" role="group" aria-label="User Actions">
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm rounded-pill pr-3">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm rounded-pill pl-3">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill pl-3">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <!-- Add more actions here if needed -->
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{ $users->links() }}
@endsection
