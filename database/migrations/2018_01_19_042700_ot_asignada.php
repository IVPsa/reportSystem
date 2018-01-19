<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OtAsignada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $table->integer('OT_ID')->unsigned();
        $table->foreign('OT_ID')->references('OT_ID')->on('OT_ORDEN_TRABAJO');

        $table->integer('users')->unsigned();
        $table->foreign('id')->references('id')->on('users');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
          Schema::dropIfExists('OtAsignada');
    }
}
