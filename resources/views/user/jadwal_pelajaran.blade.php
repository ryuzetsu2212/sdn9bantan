@extends('layouts.backend-user.app', [
'title' => 'Jadwal Pelajaran',
'contentTitle' => 'Jadwal Pelajaran',
])

@section('content')
<x-alert></x-alert>
<div class="row mb-3">
    <div class="col">
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Jadwal</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Jadwal Pelajaran</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Kelas</th>
                            <th>No</th>
                            <th>Waktu</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- Loop through $jadwalPelajaran to populate the table --}}
                        @foreach($jadwalPelajaran as $jadwal)
                        <tr>
                            <!-- <td>{{ $loop->iteration }}</td> -->
                            <td>{{ $jadwal->kelas }}</td>
                            <td>{{ $jadwal->jam_ke }}</td>
                            <td>{{ $jadwal->waktu }}</td>
                            <td>{{ $jadwal->senin }}</td>
                            <td>{{ $jadwal->selasa }}</td>
                            <td>{{ $jadwal->rabu  }}</td>
                            <td>{{ $jadwal->kamis }}</td>
                            <td>{{ $jadwal->jumat }}</td>
                            <td>{{ $jadwal->sabtu }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('user.edit_jadwal', $jadwal->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('user.jadwal_pelajaran.destroy', $jadwal->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin hapus?')" type="submit" class="btn btn-danger btn-sm ml-2">
                                            <i class="fas fa-trash fa-fw"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <!-- Tampilkan tombol navigasi halaman berikutnya jika ada -->
                <div class="d-flex justify-content-center">
                            {{ $jadwalPelajaran->links() }}
                        </div>
            </div>
        </div>
    </div>
</div>


@endsection