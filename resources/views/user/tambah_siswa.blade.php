@extends('layouts.backend-user.app',[
'title' => 'Tambah Siswa',
'contentTitle' => 'Tambah Siswa',
])
@section('content')
<!-- Small boxes (Stat box) -->

<!-- Content Header (Page header) -->

<!-- Main content -->


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('postTambah')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nama_alternatif" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kriteria_1" class="col-sm-2 col-form-label">Total Nilai Ujian Ganjil/Genap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kriteria_1" placeholder="Total Nilai Ujian Ganjil/Genap" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kriteria_2" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kriteria_2" placeholder="Kelas" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kriteria_3" class="col-sm-2 col-form-label">Kehadiran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kriteria_3" placeholder="Kehadiran" required>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right">Tambah</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<!-- /.row -->
@stop