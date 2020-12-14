<?php

use Illuminate\Database\Seeder;

class ImparteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Imparte::class, 48)->create();
    }
}
