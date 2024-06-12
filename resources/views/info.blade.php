@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: red; color: white;">Informasi Penting</div>

                    <div class="card-body">
                        <table class="table mx-auto"> 
                            <thead>
                                <tr>
                                    <th>Point</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Point 1-30 :</strong></td>
                                    <td>Panggilan orang tua</td>
                                </tr>
                                <tr>
                                    <td><strong>Point 31-60 :</strong></td>
                                    <td>Peringatan Ketiga</td>
                                </tr>
                                <tr>
                                    <td><strong>Point 61-90 :</strong></td>
                                    <td>Peringatan Kedua</td>
                                </tr>
                                <tr>
                                    <td><strong>Point 100 :</strong></td>
                                    <td>Peringatan pertama</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body">
                        <table class="table mx-auto"> 
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
