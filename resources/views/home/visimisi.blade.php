@extends('layouts.frontend.app',[
'title' => 'Profil',
])
@section('content')
<style>
    /* Gaya untuk tengahkan teks */
    h2 {
        text-align: center;
    }
</style>
<section class="contact-area">

    <!-- Visi dan Misi -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>Visi dan Misi SDN 9 Bantan</h2>
            </div>
            <div class="col-md-6">
                <h3>Visi</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Terwujudnya peserta didik yang disiplin, terampil, berprestasi, beriman, bertaqwa dan berakhlak mulia</td>
                            </tr>
                            <!-- Tambahkan baris lainnya jika diperlukan -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Misi</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>1. Mewujudkan siswa yang beriman bertaqwa dan berakhlak mulia </td>
                            </tr>
                            <tr>
                                <td>2. Menumbuhkembangkan rasa cinta terhadap sesama manusia dan lingkungan</td>
                            </tr>
                            <tr>
                                <td>3. Menerapkan sikap disiplin dan bertanggung jawab</td>
                            </tr>
                            <tr>
                                <td>4. Mewujudkan siswa yang berpengetahuan secara akademik dan terampil secara non akademik</td>
                            </tr>
                            <tr>
                                <td>5. Membiasakan siswa hidup bersih</td>
                            </tr>
                            <!-- Tambahkan baris lainnya jika diperlukan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @stop