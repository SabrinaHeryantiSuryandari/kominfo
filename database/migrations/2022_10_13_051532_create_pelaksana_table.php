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
        Schema::create('pelaksanas', function (Blueprint $table) {
            // $table->id();
            // $table->string('pt_pelaksana');
            // $table->string('alamat');
            // $table->string('nama_pelaksana');
            // $table->string('jabatan_pelaksana');
            // $table->string('kode_rekening');
            // $table->string('npwp');
            // $table->char('tlp');
            // $table->timestamps();

            $table->id();
            $table->string('pt_pelaksana');
            $table->string('alamat');
            $table->string('nama_pelaksana');
            $table->string('jabatan_pelaksana');
            $table->integer('kode_rekening');
            $table->integer('npwp');
            $table->integer('tlp');
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
        Schema::dropIfExists('pelaksanas');
    }
};
