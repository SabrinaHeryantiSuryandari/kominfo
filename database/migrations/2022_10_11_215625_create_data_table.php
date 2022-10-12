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
            $table->varchar('bidang');
            $table->varchar('program');
            $table->varchar('kegiatan');
            $table->varchar('sub_kegiatan');
            $table->varchar('bidang');
            $table->varchar('pekerjaan');
            $table->varchar('perihal');
            $table->integer('total_biaya');
            $table->integer('no_rek');
            $table->varchar('uraian_belanja');
            $table->varchar('sumber_dana');
            $table->date('tgl_pelaksanaan');
            $table->time('batas_waktu');
            $table->time('jk_waktu');
            $table->date('tgl_mulai');
            $table->varchar('tempat');
            $table->varchar('kota');
            $table->varchar('pelaksana');
            $table->varchar('alamat');
            $table->varchar('klient');
            $table->varchar('jabatan');
            $table->integer('npwp_klient');
            $table->integer('no_tlp');
            $table->varchar('fax');
            $table->varvarchar('email');
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
