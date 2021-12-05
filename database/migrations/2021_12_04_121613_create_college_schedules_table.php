<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('kd_mkul');
            $table->string('nama_mkul');
            $table->string('kd_dosen');
            $table->string('jam');
            $table->string('ruang_kelas');
            $table->string('jumlah_mhs');
            $table->string('tanggal_mulai');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_schedules');
    }
}
