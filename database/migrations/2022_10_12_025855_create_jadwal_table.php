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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengadaan_id');
            $table->string('kegiatan');
            $table->string('alokasi');
            $table->string('hari');
            $table->date('tanggal');
            $table->string('nomor');
            $table->string('deskripsi_tgl');
            
            // $table->integer('total_biaya');
            // $table->integer('kode_rek');
            // $table->string('pelaksana');
            // $table->string('uraian');
            // $table->integer('alokasi_waktu');
            // $table->date('tgl');
            // $table->char('hari');
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
        Schema::dropIfExists('jadwals');
    }
};
