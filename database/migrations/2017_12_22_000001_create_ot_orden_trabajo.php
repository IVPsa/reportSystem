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
            $table->string('OT_DES');

            $table->integer('OT_USER_ID')->unsigned();

            $table->foreign('OT_USER_ID')->references('id')->on('users');



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
