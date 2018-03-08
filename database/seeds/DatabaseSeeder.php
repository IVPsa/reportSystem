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
            factory(App\ot_orden_trabajo::class, 25)->create();
    }
}
