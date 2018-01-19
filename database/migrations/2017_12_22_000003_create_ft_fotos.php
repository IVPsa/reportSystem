<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFtFotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          // Schema::create('FT_FOTOS', function (Blueprint $table) {
          //     $table->increments('FT_COD');
          //     $table->string('FT_DESC');
          //     $table->string('FT_IMG');
          //     $table->integer('FT_REP_COD')->unsigned();
          //     $table->foreign('FT_REP_COD')->references('REP_COD')->on('REP_REPORTE');
          //
          // });
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
