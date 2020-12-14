<?php

namespace App\Http\Controllers\Alumno\Cuestionario_anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cuestionario_Anexos;
use Carbon\Carbon;

class CuestionarioAlumnoController extends Controller
{
    public function index()
    {
    	return view('alumno.cuestionario_anexos.cuestionario_index');
    }

    public function store(Request $request)
	{
		$cuestionario = new Cuestionario_Anexos;		
		$cuestionario->fecha_aplicacion = null;
        $cuestionario->descripcion = 'Inicio cuestionario';
        $cuestionario->alumno_id = auth()->user()->nia;
        $cuestionario->save();
        return redirect('/alumno/cuestionario');   
    }

    public function update(Request $request)
    {
        //dd($cuestionario);
        $cuestionario = Cuestionario_Anexos::where('alumno_id', auth()->user()->nia)->first();
        $cuestionario->fecha_aplicacion = Carbon::now();
        $cuestionario->descripcion = 'Finalizo cuestionario';            
        $cuestionario->save();  
        $mensaje = 'Has finalizalo el cuestionario. Gracias por compartir esta información eres lo más importante para nosotros.';
        return redirect('/alumno/encuestas')->with(compact('mensaje'));
    }
}
