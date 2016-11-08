<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTambahanProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('namalengkap');
            $table->integer('nomorhp');
            $table->integer('angkatan');
            $table->string('ttl');
            $table->string('alamatasli');
            $table->string('alamatmalang');
            $table->string('deskripsi');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
