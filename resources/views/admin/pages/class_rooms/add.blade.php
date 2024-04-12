@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Add Class Room</h1>
        <form action="{{ route('class_rooms.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="capacity">Capacity</label>
                <input type="number" name="capacity" id="capacity" class="form-control" required>
            </div>
            <!-- Add more fields related to class rooms here -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
