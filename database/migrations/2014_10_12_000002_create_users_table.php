<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('USER_NOMBRE');
            $table->string('email')->unique();
            $table->string('USU_EMPRESA');
            $table->string('USER_RUT');
            $table->string('USER_N_CTA_BANCO');
            $table->string('USER_BANCO');
            $table->string('USER_TP_CTA');
            $table->string('USER_AVATAR');
            $table->string('password');
            $table->integer('USER_TPU_COD')->unsigned();
            $table->foreign('USER_TPU_COD')->references('TPU_COD')->on('TPU_TIPO_USUARIO');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
