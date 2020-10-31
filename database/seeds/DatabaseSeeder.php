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
        //$this->call(AdminTableSeeder::class);
        $this->call(DocenteTableSeeder::class);
        $this->call(PadreFamiliaTableSeeder::class);
        $this->call(AlumnoTableSeeder::class);
       // $this->call(MateriasTableSeeder::class);
        $this->call(ImparteTableSeeder::class);     
        $this->call(PuestoAsignadoTableSeeder::class); 
        $this->call(ParentezcoTableSeed::class);     
        $this->call(DomicilioTableSeed::class);
        //$this->call(GrupoTableSeeder::class);
        //$this->call(PadreFamiliaTableSeeder::class);        
    }
}
