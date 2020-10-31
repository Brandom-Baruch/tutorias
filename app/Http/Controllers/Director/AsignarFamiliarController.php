<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Alumno;
use App\Parentezco;

class AsignarFamiliarController extends Controller
{
    public function index($nia)
    {
        $alumno = Alumno::find($nia);
        $padres = padre::orderBy('name')->get();
        return view('director.alumno.alumno_parentezco')->with(compact('padres','alumno'));
    }

    public function store(Request $request, $nia)
    {
    	$rules = [
            'parentezco' => 'required',
            'alumno_id' => 'unique:parentezcos',
        ];

        $message = [
            'parentezco.required' => 'Debes de escribir el parentezco que tienen',
            'alumno_id.unique' => 'Este alumno ya esta registrado',
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
    	$padre = padre::find($padre_id);

    	$alumno->padres()->detach($padre->id);
    	$eliminado = 'Se ha quitado el familiar exitosamente';
    	return back()->with(compact('eliminado'));
    	
    }
}
