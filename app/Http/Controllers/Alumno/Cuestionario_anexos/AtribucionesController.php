<?php

namespace App\Http\Controllers\Alumno\Cuestionario_anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Atribucion;

class AtribucionesController extends Controller
{
    public function create()
    {    	
    	return view('alumno.cuestionario_anexos.atribuciones');
    }

    public function store(Request $request)
    {
    	//dd($request->all());	
    	$atribucion = new Atribucion;		    
		$atribucion->cuestionario_id = auth()->user()->cuestionario_anexo->id;
        $atribucion->respuesta1 = $request->input('respuesta1');
        $atribucion->respuesta2 = $request->input('respuesta2');
        $atribucion->respuesta3 = $request->input('respuesta3');
        $atribucion->respuesta4 = $request->input('respuesta4');
        $atribucion->respuesta5 = $request->input('respuesta5');
        $atribucion->respuesta6 = $request->input('respuesta6');
        $atribucion->respuesta7 = $request->input('respuesta7');
        $atribucion->save();
        $mensaje = 'Has realizado la encuesta "Atribuciones" exitosamente';
        return redirect('/alumno/cuestionario')->with(compact('mensaje'));
	}
}
