<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\padre_familia as padre;

class SearchController extends Controller
{
    public function showAlumno(Request $request)
    {
    	$search =  $request->input('search');
    	$alumnos = Alumno::select()->where('name', 'like',"%$search%")->get();
        
        //Si solamente existe un resultado de la busqeuda
        if($alumnos->count() == 1)
        {
            //Obtenemos su id
            $nia = $alumnos->first()->nia;
            //se dirije a la vista de editar
            return redirect("director/alumno/$nia/edit");
        }
   		return view('director.buscador.alumno_show')->with(compact('alumnos', 'search'));

    }

    public function showPadre(Request $request)
    {
    	$search =  $request->input('search');
    	$padres = padre::select()->where('name', 'like',"%$search%")->get();
        if ($padres->count() == 1) {
            $id = $padres->first()->id;
            return redirect("director/padre_familia/$id/edit");
        }
   		return view('director.buscador.padre_show')->with(compact('padres', 'search'));
    }
}
