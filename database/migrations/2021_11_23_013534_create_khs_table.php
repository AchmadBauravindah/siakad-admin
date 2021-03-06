<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khs', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai_tugas');
            $table->integer('nilai_uts');
            $table->integer('nilai_uas');
            $table->string('tahun_ajaran', 10);
            $table->timestamps();
        });

        Schema::table('khs', function (Blueprint $table) {
            // kode_matkul
            $table->char('kode_matkul', 6);
            $table->foreign('kode_matkul')->references('kode')->on('matakuliahs');

            // nim_mahasiswa
            $table->char('nim_mahasiswa', 12);
            $table->foreign('nim_mahasiswa')->references('nim')->on('mahasiswas');

            // kode_semester
            $table->char('kode_semester', 1);
            $table->foreign('kode_semester')->references('kode')->on('semesters');

            // nip_dosen
            $table->char('nip_dosen', 18);
            $table->foreign('nip_dosen')->references('nip')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khs');
    }
}
