<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KategoriLemburs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_lemburs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_lembur')->unique();
            $table->unsignedInteger('Jabatan_id');
            $table->foreign('Jabatan_id')->references('id')->on('jabatans')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('Golongan_id');
            $table->foreign('Golongan_id')->references('id')->on('golongans')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Besaran_uang');
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
        Schema::dropIfExists('kategori_lemburs');
    }
}
