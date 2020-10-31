<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Alumno;
use App\Parentezco;

class AsignarAlumnosPadreController extends Controller
{
   
    public function index($id)
    {
        $padre = padre::find($id);
        $alumnos = Alumno::orderBy('name')->get();
        return view('director.padre_familia.padre_parentezco')->with(compact('padre','alumnos'));
    }


    public function store(Request $request, $id)    
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
