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
        Schema::create('evaluasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelaksana_id');
            $table->string('surat_pernyataan_minat');
            $table->string('pakta_integrita');
            $table->string('data_administrasi');
            $table->string('ijin_usaha');
            $table->string('landasan_hukum');
            $table->string('Pengurus');
            $table->string('NPWP_dan_PKP');
            $table->string('bukti_pelunasan');
            $table->string('laporan_bulanan');
            $table->string('data_pengalaman');

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
        Schema::dropIfExists('evaluasi');
    }
};
