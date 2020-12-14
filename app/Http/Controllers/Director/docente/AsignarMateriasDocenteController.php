<?php

namespace App\Http\Controllers\Director\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Docente;
use App\Imparte;

class AsignarMateriasDocenteController extends Controller
{

	 public function index(Request $request,$id)
    {
        $request->user()->autorizarPuestos('Director'); 
    	$docente = Docente::find($id);
    	$materias = Materia::all();
		return view('director.docente.docente_materias')->with(compact('docente','materias'));    	
    }

    public function store(Request $request , $id)
    {   
        /*$rules = [
            'materia_id' => 'unique:imparte'
        ];

        $message = [
            'materia_id.unique' => 'Esta materia ya se agrego',
        ]; */

        //$this->validate($request, $rules, $message);

        $docente = Docente::find($id);
        $imparte = new Imparte;                        
        $imparte->docente_id = $docente->id;
        $imparte->materia_id = $request->input('materia_id');
        $imparte->save();
        $mensaje = 'Se ha  agregado la materia exitosamente';
        return back()->with(compact('mensaje'));
    }

    public function destroy($docente_id ,$materia_id)
    {        
        $docente = Docente::find($docente_id);
        $docente->materias()->detach($materia_id);        
        $eliminado = 'Se ha eliminado la materia exitosamente';
        return back()->with(compact('eliminado'));
    }
}
