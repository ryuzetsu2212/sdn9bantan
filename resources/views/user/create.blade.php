@extends('layouts.backend-user.app', [
    'title' => 'Tambah Jadwal Pelajaran',
    'contentTitle' => 'Tambah Jadwal Pelajaran',
])

@section('content')
    <x-alert></x-alert>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Jadwal Pelajaran</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" >
                        </div>
                        <div class="form-group">
                            <label for="jam_ke">No</label>
                            <input type="number" class="form-control" id="jam_ke" name="jam_ke" >
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="text" class="form-control" id="waktu" name="waktu" >
                        </div>
                        <!-- Input untuk hari Senin -->
                        <div class="form-group">
                            <label for="senin">Senin</label>
                            <input type="text" class="form-control" id="senin" name="senin" >
                        </div>
                        <!-- Input untuk hari Selasa -->
                        <div class="form-group">
                            <label for="selasa">Selasa</label>
                            <input type="text" class="form-control" id="selasa" name="selasa" >
                        </div>
                        <!-- Input untuk hari Rabu -->
                        <div class="form-group">
                            <label for="rabu">Rabu</label>
                            <input type="text" class="form-control" id="rabu" name="rabu" >
                        </div>
                        <!-- Input untuk hari Kamis -->
                        <div class="form-group">
                            <label for="kamis">Kamis</label>
                            <input type="text" class="form-control" id="kamis" name="kamis" >
                        </div>
                        <!-- Input untuk hari Jumat -->
                        <div class="form-group">
                            <label for="jumat">Jumat</label>
                            <input type="text" class="form-control" id="jumat" name="jumat">
                        </div>
                        <!-- Input untuk hari Sabtu -->
                        <div class="form-group">
                            <label for="sabtu">Sabtu</label>
                            <input type="text" class="form-control" id="sabtu" name="sabtu">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
