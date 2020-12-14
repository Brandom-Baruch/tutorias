<?php

namespace App\Http\Controllers\Alumno\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Grupo;
use Carbon\Carbon;
use App\Atencion_Individualizada;


class AtencionIndividualController extends Controller
{
    public function create()
    {	    	    	    	
    	$materias = Materia::where('name','like','%Tutorias%')->get();    	
    	return view('alumno.test.atencion_individual')->with(compact('materias'));
    }

    public function store(Request $request)
    {
    	$atencion_individual = new Atencion_Individualizada;

        $atencion_individual->descripcion = 'Finalizo Test';
        $atencion_individual->fecha_aplicacion = Carbon::now();
        $atencion_individual->alumno_id = auth()->user()->nia;
		$atencion_individual->grupo = $request->input('grupo');                
    	$atencion_individual->nombre_docente = $request->input('docente_name');
        $atencion_individual->respuesta1 = $request->input('respuesta1');
        $atencion_individual->respuesta2 = $request->input('respuesta2');
        $atencion_individual->respuesta3 = $request->input('respuesta3');
        $atencion_individual->respuesta4 = $request->input('respuesta4');
        $atencion_individual->respuesta5 = $request->input('respuesta5');
        $atencion_individual->respuesta6 = $request->input('respuesta6');
        $atencion_individual->respuesta7 = $request->input('respuesta7');
        $atencion_individual->respuesta8 = $request->input('respuesta8');
        $atencion_individual->respuesta9 = $request->input('respuesta9');
        $atencion_individual->respuesta10 = $request->input('respuesta10');
        $atencion_individual->respuesta11 = $request->input('respuesta11');
        $atencion_individual->respuesta12 = $request->input('respuesta12');
        $atencion_individual->respuesta13 = $request->input('respuesta13');
        $atencion_individual->respuesta14 = $request->input('respuesta14');
        $atencion_individual->respuesta15 = $request->input('respuesta15');
        $atencion_individual->respuesta16 = $request->input('respuesta16');
        $atencion_individual->respuesta17 = $request->input('respuesta17');
        $atencion_individual->respuesta18 = $request->input('respuesta18');
        $atencion_individual->respuesta19 = $request->input('respuesta19');
        $atencion_individual->respuesta21 = $request->input('respuesta21');
        $atencion_individual->save();
        $mensaje = 'Has finalizado el test de "Atención indivualizada" exitosamente';
        return redirect('/alumno/encuestas')->with(compact('mensaje'));
    }
}
