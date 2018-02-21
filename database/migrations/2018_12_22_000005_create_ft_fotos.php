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

          Schema::create('FT_FOTOS', function (Blueprint $table) {
              $table->increments('FT_COD');
              $table->string('FT_DESC');
              $table->string('FT_IMG');
              $table->integer('FT_RPFG_COD')->unsigned();
              $table->foreign('FT_RPFG_COD')->references('RPFG_COD')->on('RPFG_REPORTE_FOTOGRAFICO');
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
        Schema::dropIfExists('FT_FOTOS');
    }
}
