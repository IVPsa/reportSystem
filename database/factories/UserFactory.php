<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
      'USER_NOMBRE' => 'ivan',
      'email' => 'ivan_vilugron@hotmail.es',
      'password' => '123456',
      'remember_token' => str_random(10),
      'USU_EMPRESA' => 'mappu',
      'USU_TPU_COD' => 'tecnico',
      'USER_RUT' => '188745628',
      'USER_N_CTA_BANCO' => '18874562',
      'USER_BANCO' => 'banco estado',
      'USER_AVATAR'=>'imagenes/sinPerfil.png',
      'USER_TP_CTA' => 'RUT'
    ];
});
