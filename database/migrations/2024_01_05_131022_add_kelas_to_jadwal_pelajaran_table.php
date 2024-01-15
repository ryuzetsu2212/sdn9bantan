<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKelasToJadwalPelajaranTable extends Migration
{
    public function up()
    {
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            $table->string('kelas')->nullable(); // Tambahkan kolom 'kelas'
        });
    }

    public function down()
    {
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            $table->dropColumn('kelas'); // Rollback jika diperlukan
        });
    }
}

