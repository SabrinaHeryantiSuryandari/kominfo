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
            $table->integer('no_sk_pengadaan');
            $table->date('tgl_pengadaan');
            $table->integer('no_sk_administrasi');
            $table->date('tgl_administrasi');
            $table->char('nama_pejabat');
            $table->integer('nip');
            $table->integer('no_ba');
            $table->string('bidang');
            $table->string('program');
            $table->string('kegiatan');
            $table->string('sub_kegiatan');
            $table->string('pekerjaan');
            $table->string('perihal');
            $table->integer('total_biaya');
            $table->integer('no_rek');
            $table->string('uraian_belanja');
            $table->string('sumber_dana');
            $table->date('tgl_pelaksanaan');
            $table->time('batas_waktu');
            $table->time('jk_waktu');
            $table->date('tgl_mulai');
            $table->string('tempat');
            $table->string('kota');
            $table->string('pelaksana');
            $table->string('alamat');
            $table->string('klient');
            $table->string('jabatan');
            $table->integer('npwp_klient');
            $table->integer('no_tlp');
            $table->string('fax');
            $table->string('email');
            $table->integer('jk_pekerjaan');
            $table->integer('jk_penawaran');
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
