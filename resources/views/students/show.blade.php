<!-- resources/views/students/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Student Details</h2>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $student->name }}</h4>
                        <p class="card-text"><strong>Class:</strong> {{ $student->kelas }}</p>
                        <p class="card-text"><strong>Major:</strong> {{ $student->jurusan }}</p>
                        <p class="card-text"><strong>Points:</strong> {{ $student->point }}</p>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
