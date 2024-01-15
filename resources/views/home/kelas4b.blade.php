@extends('layouts.frontend.app',[
'title' => 'Jadwal Pelajaran',
])
@section('content')
<section class="contact-area">

    <!-- Halaman Data Guru -->
    <div class="container mt-5">
        <section id="card">
            <div class="container">
                <div class="row">
                    <table id="dataTable" class="table table-bordered mb-4 table-responsive">
                        <thead>
                            <tr>
                                <th colspan="9" style="text-align: center;">Jadwal Pelajaran Kelas IV.B</th>
                            </tr>
                            <tr>
                                <!-- <th>Kelas</th> -->
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Hubungkan ke database
                            $koneksi = mysqli_connect("localhost", "root", "", "laravel_project");

                            // Periksa koneksi
                            if (!$koneksi) {
                                die("Koneksi database gagal: " . mysqli_connect_error());
                            }

                            // Query untuk mengambil data berita
                            $query = "SELECT * FROM jadwal_pelajaran WHERE kelas = 'IV.B'";
                            $result = mysqli_query($koneksi, $query);

                            // Periksa apakah query berhasil
                            if (!$result) {
                                die("Query gagal: " . mysqli_error($koneksi));
                            }

                            $nomor = 1;
                            // Loop untuk menampilkan data berita dari database

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    
                                    <td>' . $row["jam_ke"] . '</td>
                                    <td>' . $row["waktu"] . '</td>
                                    <td>' . $row["senin"] . '</td>
                                    <td>' . $row["selasa"] . '</td>
                                    <td>' . $row["rabu"] . '</td>
                                    <td>' . $row["kamis"] . '</td>
                                    <td>' . $row["jumat"] . '</td>
                                    <td>' . $row["sabtu"] . '</td>
                                </tr>';
                                $nomor++; //
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    @stop