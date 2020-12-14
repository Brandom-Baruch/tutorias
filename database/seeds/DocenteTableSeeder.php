<?php

use Illuminate\Database\Seeder;
use App\PuestoAsignado;
use App\Puesto;
use App\Imparte;
use App\Docente;

class DocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$docentes = factory(Docente::class, 12)->create();
        $puesto = factory(Puesto::class,4)->create();

         Docente::create([

            'name' => 'SrPanecillo',
            'apellidoP' => 'González',
            'apellidoM' => 'Cervantes',
            'edad' => 22,
            'email' => 'baruch94@live.com',
            'password' => bcrypt('123123'),            
            'telefono_fijo' => '248-177-0762' ,
            'telefono_cel' => '248-177-0762' ,            
            'remember_token' => str_random(100),
        ]);            	
    }
}
