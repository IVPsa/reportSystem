<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtOrdenTrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('OT_ORDEN_TRABAJO', function (Blueprint $table) {
            $table->increments('OT_ID');
            // $table->integer('OT_FOLIO');
            $table->string('OT_DES');
            $table->string('OT_ESTADO');
            $table->date('OT_FECHA_CREACION');
            $table->date('OT_FECHA_TERMINO');
            $table->string('OT_REGION');
            $table->string('OT_CIUDAD');
            $table->string('OT_DIRECCION');
            $table->string('OT_VALOR');
            $table->integer('OT_USER_ID_CREADOR');
            $table->integer('OT_USER_ID')->unsigned();
            $table->foreign('OT_USER_ID')->references('id')->on('users');
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
        //
        Schema::dropIfExists('OT_ORDEN_TRABAJO');
    }
}
