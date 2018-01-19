<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteFotografico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('RPFG_REPORTE_FOTOGRAFICO', function (Blueprint $table) {


            $table->increments('RPFG_COD');


            $table->string('RPFG_IMG_URL');
            $table->string('RPFG_IMG_DESC');

            $table->integer('RPFG_REP_COD')->unsigned();
            $table->foreign('RPFG_REP_COD')->references('REP_COD')->on('REP_REPORTE');

            $table->integer('RPFG_OT_ID')->unsigned();
            $table->foreign('RPFG_OT_ID')->references('OT_ID')->on('OT_ORDEN_TRABAJO');

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
