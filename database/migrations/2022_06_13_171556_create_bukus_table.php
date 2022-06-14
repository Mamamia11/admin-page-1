<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn');
            $table->string('judul');
            $table->string('cover');
            $table->integer('stok');
            $table->text('deskripsi');
            $table->integer('halaman');
            $table->string('harga');
            $table->foreignId('idpengarang');
            $table->foreignId('idpenerbit');
            $table->foreignId('idkategori');
            $table->foreignId('idrak');
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
        Schema::dropIfExists('bukus');
    }
}
