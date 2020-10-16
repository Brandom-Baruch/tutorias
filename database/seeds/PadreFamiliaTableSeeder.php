<?php

use Illuminate\Database\Seeder;
use App\Padre_familia;

class PadreFamiliaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Padre_familia::class, 10)->create();
    }
}
