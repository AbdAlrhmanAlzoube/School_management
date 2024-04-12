@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <h1>Edit Subject</h1>
        <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
            @csrf
            @method('PUT')
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
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $subject->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $subject->description }}</textarea>
            </div>
            <!-- Add more fields related to subjects here -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection