<?php
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\ot_orden_trabajo::class, function (Faker $faker) {
    return [
        //
     'OT_DES'=>$faker->text($maxNbChars = 200),
     'OT_ESTADO'=>'EN ESPERA',
     'OT_FECHA_CREACION'=>Carbon::now(),
     'OT_FECHA_TERMINO'=>Carbon::now(),
     'OT_REGION'=>'asdf',
     'OT_CIUDAD'=>'asdf',
     'OT_DIRECCION'=>$faker->state(),
     'OT_VALOR'=>$faker->numberBetween($min = 1, $max = 500000),
     'OT_USER_ID_CREADOR'=> $faker->numberBetween($min = 1, $max = 1),
     'OT_USER_ENCARGADO'=> $faker->numberBetween($min = 1, $max = 1),
     'updated_at'=> Carbon::now(),
     'created_at'=> Carbon::now()
    ];
});
