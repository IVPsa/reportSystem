<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtAsignada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('OT_ASIGNADA', function (Blueprint $table) {

        $table->integer('OT_ID')->unsigned();
        $table->foreign('OT_ID')->references('OT_ID')->on('OT_ORDEN_TRABAJO');

        $table->integer('id')->unsigned();
        $table->foreign('id')->references('id')->on('users');
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
          Schema::dropIfExists('OT_ASIGNADA');
    }
}
