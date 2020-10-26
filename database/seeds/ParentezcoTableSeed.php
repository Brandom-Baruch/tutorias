<?php

use Illuminate\Database\Seeder;

class ParentezcoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Parentezco::class, 10)->create();
    }
}
