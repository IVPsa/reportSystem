<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //quitar esto?
        //TAL VEZ SI, delar un select con empresas afiliadas al RPS
        //revisar despues
        Schema::create('EMP_EMPRESA', function (Blueprint $table) {
        $table->increments('EMP_COD');
        $table->string('EMP_DESCRIPCION');
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
          Schema::dropIfExists('EMP_EMPRESA');
    }
}
