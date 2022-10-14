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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->integer('biaya');
            $table->string('kode_rek');
            $table->date('tgl_pelaksana');
            $table->string('perihal');
            $table->foreignId('pelaksana_id');
            $table->foreignId('pengadaan_id');
            $table->foreignId('jadwal_id');


            // $table->string('nama_pelaksana');
            // $table->string('pt_pelaksana');
            // $table->string('alamat');
            // $table->string('jabatan_pelaksana');
            // $table->string('npwp');
            // $table->char('tlp');
            // $table->string('jenis_pengadaan');
            // $table->string('jenis_barang_pengadaan');
            // $table->char('volume');
            // $table->string('status');
            // $table->foreignId('jadwal_id');

            // $table->string('uraian_belanja');
            // $table->string('sumber_dana');
            // $table->date('tgl_pelaksanaan');
            // $table->time('batas_waktu');
            // $table->time('jk_waktu');
            // $table->date('tgl_mulai');
            // $table->string('tempat');
            // $table->string('kota');
            // $table->string('pelaksana');
            // $table->string('alamat');
            // $table->string('klient');
            // $table->string('jabatan');
            // $table->integer('npwp_klient');
            // $table->integer('no_tlp');
            // $table->string('fax');
            // $table->string('email');
            // $table->integer('jk_pekerjaan');
            // $table->integer('jk_penawaran');
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
        Schema::dropIfExists('data');
    }
};
