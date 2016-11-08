<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldKategoriIdForTableArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::table('artikel', function(Blueprint $table) {
        $table->integer('kategori_id')->unsigned();
        $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
