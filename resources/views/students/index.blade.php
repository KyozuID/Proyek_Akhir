<!-- resources/views/students/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Students</h2>

                <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Add Student</a>

                @if(count($students) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Major</th>
                                <th>Points</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->kelas }}</td>
                                    <td>{{ $student->jurusan }}</td>
                                    <td>{{ $student->point }}</td>
                                    <td>
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm" title="View Student"><i class="fa fa-eye"></i> View</a>
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm" title="Edit Student"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this student?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info" role="alert">
                        No students found.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
