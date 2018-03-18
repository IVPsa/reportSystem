<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // factory(App\User::class, 1)->create();
            // factory(App\ot_orden_trabajo::class, 90000)->create();
            App\TipoDeUsuario::create([ 'TPU_DES' => 'ADMINISTRADOR' ]);
            App\TipoDeUsuario::create([ 'TPU_DES' => 'TECNICO' ]);
    }
}
