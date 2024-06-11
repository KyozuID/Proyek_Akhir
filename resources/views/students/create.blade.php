@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Student</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="" disabled selected>Select class</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
            </div>
            <div class="form-group">
                <label for="point">Point:</label>
                <input type="number" class="form-control" id="point" name="point" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
