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
        Schema::create('pelaksana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelaksana');
            $table->string('pt_pelaksana');
            $table->string('alamat');
            $table->string('jabatan_pelaksana');
            $table->string('npwp');
            $table->char('tlp');

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
        Schema::dropIfExists('pelaksana');
    }
};
