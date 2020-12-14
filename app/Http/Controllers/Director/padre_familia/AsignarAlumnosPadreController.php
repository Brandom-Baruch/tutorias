<?php

namespace App\Http\Controllers\Director\padre_familia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Alumno\Alumno;
use App\Parentezco;

class AsignarAlumnosPadreController extends Controller
{
   
    public function index(Request $request,$id)
    {
        $request->user()->autorizarPuestos('Director'); 
        $padre = padre::find($id);
        $alumnos = Alumno::orderBy('name')->get();
        return view('director.padre_familia.padre_parentezco')->with(compact('padre','alumnos'));
    }


    public function store(Request $request, $id)    
    {

        $rules = [
            'parentezco' => 'required'            
        ];

        $message = [
            'parentezco.required' => 'Debes de escribir el parentesco que tienen'            
        ];

        $this->validate($request, $rules , $message);

        $padre = padre::find($id);
        $parentezco = new Parentezco;
        $parentezco->parentezco = $request->input('parentezco');
        $parentezco->alumno_id = $request->input('alumno_id');
        $parentezco->padre_id = $padre->id;
        $parentezco->save();
        $mensaje = 'Se ha agregado el alumno exitosamente';
        return back()->with(compact('mensaje'));
    }
    
    public function destroy($padre_id , $alumno_id)
    {        
        $alumno = Alumno::find($alumno_id);
        $padre = padre::find($padre_id);
        $padre->alumnos()->detach($alumno->nia);        
        $mensaje = 'Se ha eliminado el alumno '. $alumno->name .' exitosamente ';
        return back()->with(compact('mensaje'));
    }
}
