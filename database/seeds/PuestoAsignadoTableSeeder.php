<?php

use Illuminate\Database\Seeder;

class PuestoAsignadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PuestoAsignado::class, 24)->create();
    }
}
