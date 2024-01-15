@extends('layouts.backend-user.app',[
'title' => 'Data Hasil Akhir',
'contentTitle' => 'Data Hasil Akhir',
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
                        <h3 class="card-title">Hasil</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Hasil</th>
                                    <th>Peringkat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $rank = 1 @endphp
                                @foreach ($sortedData as $siswa)
                                <tr>
                                    
                                    <td>{{ $siswa->nama_siswa }}</td>
                                    {{-- Hasil --}}
                                    <td>
                                        {{
                    (($siswa->kriteria_1 / $C1max['siswa']) * $widget1['kriteria']) +
                    (($C2min['siswa'] / $siswa->kriteria_2) * $widget2['kriteria']) +
                    (($siswa->kriteria_3 / $C3max['siswa']) * $widget3['kriteria'])
                    }}
                                    </td>
                                    <td>{{ $rank }}</td>
                                </tr>
                                @php $rank++ @endphp
                                @endforeach
                            </tbody>
                        </table>
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