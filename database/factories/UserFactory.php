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
      'USU_NOMBRE' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'password' => '123456',
      'remember_token' => str_random(10),
      'USU_EMPRESA' => str_random(10),
      'USU_TPU_COD' => str_random(10),
      'USU_RUT' => str_random(10),
      'USER_N_CTA_BANCO' => str_random(10),
      'USER_BANCO' => str_random(10),
      'USER_TP_CTA' => str_random(10)
    ];
});
