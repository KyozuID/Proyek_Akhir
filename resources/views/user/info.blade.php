<!-- resources/views/user/info.blade.php -->

@extends('layouts.user_layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: red; color: white;">Informasi Penting</div>

                    <div class="card-body">
                        <p><strong>Point 1-30 :</strong> Panggilan orang tua</p>
                        <p><strong>Point 31-60 :</strong> Peringatan Ketiga</p>
                        <p><strong>Point 61-90 :</strong> Peringatan Kedua</p>
                        <p><strong>Point 100 :</strong> Peringatan pertama</p>
                    </div>
                    <div class="card-body">
                        <table class="table mx-auto"> <!-- Tambahkan kelas mx-auto di sini -->
                            <thead>
                                <tr>
                                    <th>Jenis Pelanggaran</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Siswa terlambat lebih dari 15 menit</strong></td>
                                    <td>Siswa akan di kurangi 5 point</td>
                                </tr>
                                <tr>
                                    <td><strong>Siswa tidak mengikuti upacara</strong></td>
                                    <td>Siswa akan dikurangi 10 point</td>
                                </tr>
                                <tr>
                                    <td><strong>Siswa wajib memakai sepatu hitam dan ikat pinggang hitam</strong></td>
                                    <td>Jika tidak siswa akan dikurangi 5 point</td>
                                </tr>
                                <tr>
                                    <td><strong>Siswa merokok di sekolah</strong></td>
                                    <td>Siswa akan di kurangi 10 point</td>
                                </tr>
                                <tr>
                                    <td><strong>Siswa bermain judi, berkelahi dan mencuri</strong></td>
                                    <td>Siswa akan di kurangi 20 point</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
