@extends('layouts.backend-user.app',[
'title' => 'Data Siswa',
'contentTitle' => 'Data Siswa',
])
@section('content')
<!-- Small boxes (Stat box) -->

<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit siswa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit siswa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="/postEdit/{{$siswa->id}}" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_siswa" placeholder="Nama siswa" value="{{ $siswa->nama_siswa}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kriteria_1" class="col-sm-2 col-form-label">Total Nilai Ujain Ganjil/Genap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kriteria_1" placeholder="Total Nilai Ujain Ganjil/Genap" value="{{ $siswa->kriteria_1}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kriteria_2" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kriteria_2" placeholder="Kelas" value="{{ $siswa->kriteria_2}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kriteria_3" class="col-sm-2 col-form-label">Kehadiran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kriteria_3" placeholder="Kehadiran" value="{{ $siswa->kriteria_3}}">
                                </div>
                            </div>

                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->

</section>


<!-- /.row -->
@stop