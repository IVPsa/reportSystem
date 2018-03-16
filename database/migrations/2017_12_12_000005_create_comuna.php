<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComuna extends Migration
{

     /**
      * Run the migrations.
      * @table COM_COMUNA
      *
      * @return void
      */
     public function up()
     {

       Schema::create('COM_COMUNA', function (Blueprint $table) {

           $table->increments('COM_COD');
           $table->string('COM_NOMBRE', 20);
           $table->timestamps();

           $table->integer('COM_PRO_COD')->unsigned();
           $table->foreign('COM_PRO_COD')->references('PRO_COD')->on('PRO_PORVINCIA');


       });

     }

     public function down()
     {
       Schema::dropIfExists('COM_COMUNA');
     }
 }
