<?php

namespace App\Http\Controllers\Director\alumno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Alumno;
use App\Parentezco;

class AsignarFamiliarAlumnoController extends Controller
{
    public function index(Request $request,$nia)
    {
        $request->user()->autorizarPuestos('Director'); 
        $alumno = Alumno::find($nia);
        $padres = padre::orderBy('name')->get();
        return view('director.alumno.alumno_parentezco')->with(compact('padres','alumno'));
    }

    public function store(Request $request, $nia)
    {
    	$rules = [
            'parentezco' => 'required',            
        ];

        $message = [
            'parentezco.required' => 'Debes de escribir el parentezco que tienen',            
        ];

        $this->validate($request, $rules , $message);

        $alumno = Alumno::find($nia);
        $parentezco = new Parentezco;
        $parentezco->parentezco = $request->input('parentezco');
        $parentezco->padre_id = $request->input('padre_id');
        $parentezco->alumno_id = $alumno->nia;
        $parentezco->save();
        $mensaje = 'Se ha agregado el familiar exitosamente';
        return back()->with(compact('mensaje'));
    }

    public function destroy($nia, $padre_id)
    {
    	$alumno = Alumno::find($nia);    	
    	$alumno->padres()->detach($padre_id);
    	$eliminado = 'Se ha quitado el familiar exitosamente';
    	return back()->with(compact('eliminado'));
    	
    }
}
