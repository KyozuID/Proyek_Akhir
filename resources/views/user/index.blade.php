@extends('layouts.user_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="my-4">Daftar Siswa</h2>

                @if(count($students) > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->kelas }}</td>
                                <td>{{ $student->jurusan }}</td>
                                <td>{{ $student->point }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p>Tidak ada data siswa.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
