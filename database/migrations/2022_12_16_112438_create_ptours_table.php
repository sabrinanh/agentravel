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
        Schema::create('ptours', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->date('tanggalb');
            $table->date('tanggalp');
            $table->text('destinasi');
            $table->text('fasilitas');
            $table->string('img');
            $table->enum('kota', ['Malang', 'Bali', 'Lombok', 'Semarang', 'Bandung']);
            $table->integer('hari');
            $table->integer('malam');
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
        Schema::dropIfExists('ptours');
    }
};
