<?php

use Illuminate\Database\Seeder;

class TipoDeUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         App\TipoDeUsuario::create([ 'TPU_DES' => 'ADMINISTRADOR' ]);
         App\TipoDeUsuario::create([ 'TPU_DES' => 'TECNICO' ]);
    }
}
