@extends('layouts.backend-user.app', [
    'title' => 'Data Siswa',
    'contentTitle' => 'Data Siswa',
])

@section('content')
<!-- Small boxes (Stat box) -->

<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('user.tambah_siswa.index') }}" class="btn-sm btn-success">+ Tambah Siswa</a>
                        <br /><br />

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Siswa</th>
                                    <th>Total Nilai Ujian Ganjil/Genap</th>
                                    <th>Kelas</th>
                                    <th>Kehadiran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $totalNilai = 0;
                                $kehadiranList = []; // Array to store kehadiran values
                                @endphp

                                @foreach($data as $i => $siswa)
                                @php
                                $totalNilai += $siswa->kriteria_1;
                                $kehadiranList[] = $siswa->kriteria_3;
                                @endphp
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $siswa->nama_siswa }}</td>
                                    <td>{{ $siswa->kriteria_1 }}</td>
                                    <td>{{ $siswa->kriteria_2 }}</td>
                                    <td>{{ $siswa->kriteria_3 }}</td>
                                    <td>
                                        <a href="/user/edit_siswa/{{ $siswa->id }}" class="btn-xs btn-primary">Edit</a>
                                        <a href="/user/deleteSiswa/{{ $siswa->id }}" class="btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                                @php
                                $averageNilai = count($data) > 0 ? $totalNilai / count($data) : 0;

                                // Calculate modus (mode) for kehadiran
                                $kehadiranCounts = array_count_values($kehadiranList);
                                arsort($kehadiranCounts);
                                $modus = key($kehadiranCounts);
                                @endphp
                            </tbody>
                        </table>

                        <div class="mt-3">
                            <strong>Rata-rata Total Nilai Ujian: </strong>{{ number_format($averageNilai, 2) }}
                            <br>
                            <strong>Nilai Kehadiran Terbanyak/Modus: </strong>{{ $modus }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.row -->
@stop
