<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tunjangans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunjangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_tunjangan')->unique();
            $table->unsignedInteger('Jabatan_id');
            $table->foreign('Jabatan_id')->references('id')->on('jabatans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('Golongan_id');
            $table->foreign('Golongan_id')->references('id')->on('golongans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('Status');
            $table->integer('Jumlah_anak');
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
        Schema::dropIfExists('tunjangans');
    }
}
