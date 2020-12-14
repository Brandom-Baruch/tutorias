<?php

namespace App\Http\Controllers\Director\grupo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grupo;
use App\Materia;
use App\Asignada;

class GrupoMateriasController extends Controller
{

    public function show(Request $request, Grupo $grupo)
    {
        $request->user()->autorizarPuestos('Director'); 
        $materias = $grupo->materias()->paginate(10);
        $tutorias = $grupo->materias()->where('name','like','%tutorias%')->first();             
        //dd($tutorias->name);
        return view('director.grupo.grupo_materia_show')->with(compact('grupo', 'materias','tutorias'));
    }

    public function create(Request $request,$id)    
    {
        $request->user()->autorizarPuestos('Director'); 
    	$grupo = Grupo::find($id);
    	$tutorias = $grupo->materias()->where('name','like','%tutorias%')->first();                
        //dd($t->name);
        $materias = Materia::orderBy('id', 'desc')->get();            	
    	return view ('director.grupo.materia_grupo.grupo_materias')->with(compact('grupo','materias','tutorias'));
    }

    public function store(Request $request)
    {    	
    	$asignada = new Asignada;    	
    	$asignada->grupo_id = $request->input('grupo_id');
    	$asignada->materia_id = $request->input('materia_id');
    	$asignada->save();
    	$mensaje = 'Se ha agrega la materia de '. $request->input('materia_name') . 'clave: ' .$request->input('materia_clave');
    	return back()->with(compact('mensaje'));
    }	

    public function materia_destroy($grupo_id, $materia_id)
    {                
        $materia = Materia::find($materia_id);
        $materia->grupos()->detach($grupo_id);
        $eliminado = 'Se ha quitado la materia '.$materia->name.' del grupo exitosamente';
        return back()->with(compact('eliminado'));

    }
}
