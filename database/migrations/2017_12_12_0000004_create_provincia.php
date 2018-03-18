<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('PRO_PROVINCIA', function (Blueprint $table) {
          $table->increments('PRO_COD');
          $table->string('PRO_NOMBRE', 23);
          $table->integer('PRO_REG_COD')->unsigned();
          $table->foreign('PRO_REG_COD')->references('REG_COD')->on('REG_REGION');


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
           Schema::dropIfExists('PRO_PORVINCIA');
    }
}
