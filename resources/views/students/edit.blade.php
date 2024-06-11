@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Student</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="X" {{ $student->kelas == 'X' ? 'selected' : '' }}>X</option>
                    <option value="XI" {{ $student->kelas == 'XI' ? 'selected' : '' }}>XI</option>
                    <option value="XII" {{ $student->kelas == 'XII' ? 'selected' : '' }}>XII</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $student->jurusan }}" required>
            </div>
            <div class="form-group">
                <label for="point">Point:</label>
                <input type="number" class="form-control" id="point" name="point" value="{{ $student->point }}" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
