<?php

namespace App\Http\Controllers\Alumno\Cuestionario_anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tipo_Mentalidad;


class TiposMentalidadController extends Controller
{
    public function create()
    {
    	return view('alumno.cuestionario_anexos.tipos_mentalidad');
    }

    public function store(Request $request)
    {

    	//dd($request->all());
    	$mentalidad = new Tipo_Mentalidad;
    	$mentalidad->cuestionario_id = auth()->user()->cuestionario_anexo->id;
        $mentalidad->respuesta1 = $request->input('respuesta1');
        $mentalidad->respuesta2 = $request->input('respuesta2');
        $mentalidad->respuesta3 = $request->input('respuesta3');
        $mentalidad->respuesta4 = $request->input('respuesta4');
        $mentalidad->respuesta5 = $request->input('respuesta5');
        $mentalidad->r5 = $request->input('r5');
        $mentalidad->save();
        $mensaje = 'Has realizado el cuestionario "Tipo de mentalidad" exitosamente';
        return redirect('/alumno/cuestionario')->with(compact('mensaje'));


    }


}
