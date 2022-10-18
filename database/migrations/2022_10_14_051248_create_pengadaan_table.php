<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelaksana_id');
            $table->string('jenis_pengadaan');
            $table->string('tanggal_acara');
            $table->string('deskripsi_tgl_acara');
            $table->string('waktu_acara');
            $table->string('tempat_acara');
            $table->string('total_hps');
            $table->string('deskripsi_hps');
            $table->string('nilai_negosiasi');
            $table->string('deskripsi_nilai_nego');
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
        Schema::dropIfExists('pengadaans');
    }
};
