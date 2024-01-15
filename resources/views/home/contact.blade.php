@extends('layouts.frontend.app',[
'title' => 'Profil',
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
                                <th colspan="9" style="text-align: center;">Profil Guru SDN 9 Bantan</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Kelahiran</th>
                                <th>Pangkat/Golongan</th>
                                <th>Pendidikan</th>
                                <th>Jabatan</th>
                                <th>Email</th>
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
                            $query = "SELECT * FROM users WHERE level = 'user'";
                            $result = mysqli_query($koneksi, $query);

                            // Periksa apakah query berhasil
                            if (!$result) {
                                die("Query gagal: " . mysqli_error($koneksi));
                            }

                            $nomor = 1;
                            // Loop untuk menampilkan data berita dari database

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>' . $nomor . '</td>
                                    <td>' . $row["name"] . '</td>
                                    <td>' . $row["nip"] . '</td>
                                    <td>' . $row["kelahiran"] . '</td>
                                    <td>' . $row["pangkat"] . '</td>
                                    <td>' . $row["pendidikan"] . '</td>
                                    <td>' . $row["jabatan"] . '</td>
                                    <td>' . $row["email"] . '</td>
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