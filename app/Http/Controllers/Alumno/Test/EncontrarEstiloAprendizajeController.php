<?php

namespace App\Http\Controllers\Alumno\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Encontrar_Estilo_Aprendizaje;

class EncontrarEstiloAprendizajeController extends Controller
{
    public function create()
    {
    	return view('alumno.test.encontrar_estilo_aprendizaje');
    }

    public function store(Request $request)
    {
    	$encontrar_estilo_aprendizaje = new Encontrar_Estilo_Aprendizaje;
    	$encontrar_estilo_aprendizaje->test_id = auth()->user()->test->id;
    	$encontrar_estilo_aprendizaje->respuesta1 = $request->input('respuesta1');
        $encontrar_estilo_aprendizaje->respuesta2 = $request->input('respuesta2');
        $encontrar_estilo_aprendizaje->respuesta3 = $request->input('respuesta3');
        $encontrar_estilo_aprendizaje->respuesta4 = $request->input('respuesta4');
        $encontrar_estilo_aprendizaje->respuesta5 = $request->input('respuesta5');
        $encontrar_estilo_aprendizaje->respuesta6 = $request->input('respuesta6');
        $encontrar_estilo_aprendizaje->respuesta7 = $request->input('respuesta7');
        $encontrar_estilo_aprendizaje->respuesta8 = $request->input('respuesta8');
        $encontrar_estilo_aprendizaje->respuesta9 = $request->input('respuesta9');
        $encontrar_estilo_aprendizaje->respuesta10 = $request->input('respuesta10');
        $encontrar_estilo_aprendizaje->respuesta11 = $request->input('respuesta11');
        $encontrar_estilo_aprendizaje->respuesta12 = $request->input('respuesta12');
        $encontrar_estilo_aprendizaje->respuesta13 = $request->input('respuesta13');
        $encontrar_estilo_aprendizaje->save();
        $mensaje = 'Has realizado el test "Encontrar tu estilo de aprendizaje" exitosamente';
        return redirect('/alumno/test')->with(compact('mensaje'));
    }
}
