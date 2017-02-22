<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pegawais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nip')->unique();
            $table->integer('User_id')->unsigned()->unique();
            $table->foreign('User_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('Jabatan_id')->unsigned();
            $table->foreign('Jabatan_id')->references('id')->on('jabatans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('Golongan_id')->unsigned();
            $table->foreign('Golongan_id')->references('id')->on('golongans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('Photo')->nullable();
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
        Schema::dropIfExists('pegawais');
    }
}
