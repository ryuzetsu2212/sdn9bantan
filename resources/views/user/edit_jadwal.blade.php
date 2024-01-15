@extends('layouts.backend-user.app', [
'title' => 'Edit Jadwal Pelajaran',
'contentTitle' => 'Edit Jadwal Pelajaran',
])

@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Jadwal Pelajaran</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('user.jadwal_pelajaran.update', $jadwalPelajaran->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $jadwalPelajaran->kelas }}" >
                    </div>
                    <div class="form-group">
                        <label for="jam_ke">No</label>
                        <input type="number" class="form-control" id="jam_ke" name="jam_ke" value="{{ $jadwalPelajaran->jam_ke }}" >
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input type="text" class="form-control" id="waktu" name="waktu" value="{{ $jadwalPelajaran->waktu }}" >
                    </div>
                    <!-- Input untuk hari Senin -->
                    <div class="form-group">
                        <label for="senin">Senin</label>
                        <input type="text" class="form-control" id="senin" name="senin" value="{{ $jadwalPelajaran->senin }}" >
                    </div>
                    <!-- Input untuk hari Selasa -->
                    <div class="form-group">
                        <label for="selasa">Selasa</label>
                        <input type="text" class="form-control" id="selasa" name="selasa" value="{{ $jadwalPelajaran->selasa }}" >
                    </div>
                    <!-- Input untuk hari Rabu -->
                    <div class="form-group">
                        <label for="rabu">Rabu</label>
                        <input type="text" class="form-control" id="rabu" name="rabu" value="{{ $jadwalPelajaran->rabu }}" >
                    </div>
                    <!-- Input untuk hari Kamis -->
                    <div class="form-group">
                        <label for="kamis">Kamis</label>
                        <input type="text" class="form-control" id="kamis" name="kamis" value="{{ $jadwalPelajaran->kamis }}" >
                    </div>
                    <!-- Input untuk hari Jumat -->
                    <div class="form-group">
                        <label for="jumat">Jumat</label>
                        <input type="text" class="form-control" id="jumat" name="jumat" value="{{ $jadwalPelajaran->jumat }}" >
                    </div>
                    <!-- Input untuk hari Sabtu -->
                    <div class="form-group">
                        <label for="sabtu">Sabtu</label>
                        <input type="text" class="form-control" id="sabtu" name="sabtu" value="{{ $jadwalPelajaran->sabtu }}" >
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection