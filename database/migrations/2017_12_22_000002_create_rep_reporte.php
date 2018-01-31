<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepReporte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('REP_REPORTE', function (Blueprint $table) {
            $table->increments('REP_COD');
            $table->text('REP_DES');
            $table->dateTime('REP_FECHA_EDICION');
            $table->date('REP_FECHA_INICIO');
            $table->string('REP_ESTADO');

            $table->integer('REP_USER_ID')->unsigned();
            $table->foreign('REP_USER_ID')->references('id')->on('users');

            $table->integer('REP_OT_ID')->unsigned();
            $table->foreign('REP_OT_ID')->references('OT_ID')->on('OT_ORDEN_TRABAJO');

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
          Schema::dropIfExists('REP_REPORTE');
    }
}
