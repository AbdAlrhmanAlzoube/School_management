@extends('Dashboard.guardians.guardian_dashboard') <!-- Correctly extending the layout -->

@section('guardian_content') <!-- Ensure this section aligns with the layout -->
<div class="container">
    <h1>All Students</h1>

    @if ($students->isEmpty())
        <p>No students have been added yet.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Birth Date</th>
                    <th>Educational Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->user->first_name }} {{ $student->user->last_name }}</td>
                        <td>{{ $student->birth_date }}</td>
                        <td>{{ $student->educational_level }}</td>
                        <td>
                            <!-- View Details with Icon -->
                            <a href="{{ route('children.show', ['child' => $student->id]) }}" class="btn btn-info" title="View Details">
                                <i class="fas fa-eye"></i> <!-- FontAwesome icon for 'view' -->
                            </a>
                      
                            <!-- Delete with Icon -->
                            <form action="{{ route('children.destroy', ['child' => $student->id]) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE') <!-- Ensure DELETE method -->
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')" title="Delete">
                                    <i class="fas fa-trash-alt"></i> <!-- FontAwesome icon for 'delete' -->
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
