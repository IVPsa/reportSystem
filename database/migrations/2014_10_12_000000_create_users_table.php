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
            $table->string('USU_NOMBRE');
            $table->string('email')->unique();
            $table->string('USU_EMPRESA');
            $table->string('USU_TPU_COD');
            $table->string('USU_RUT');
            $table->string('USER_N_CTA_BANCO');
            $table->string('USER_BANCO');
            $table->string('USER_TP_CTA');
            $table->string('password');
            // $table->integer('USU_EMPRESA');
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
