<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detalles', function (Blueprint $table) {
            $table->integer('id_detalle');
            $table->primary('id_detalle');
            $table->increments('id_detalle');
            $table->integer('insert_id')->unsigned();
            $table->foreign('insert_id')->references('id_detalle')->on('inserts');
            $table->string('detalle');
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
        Schema::dropIfExists('detalles');
    }
}
