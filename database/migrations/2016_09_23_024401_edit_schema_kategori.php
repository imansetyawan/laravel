<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditSchemaKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori', function(Blueprint $table) {
        $table->integer('indukkategori_id')->unsigned();
        $table->foreign('indukkategori_id')->references('id')->on('induk_kategori')->onDelete('cascade');
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
