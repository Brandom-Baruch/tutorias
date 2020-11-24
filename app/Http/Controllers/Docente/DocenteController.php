<?php

namespace App\Http\Controllers\Docente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Docente;
use App\Alumno;
use App\Padre_familia;
use App\Entrevista_Fresca_Alumno;
use App\Entrevista_Fresca_Padre;
use App\MarcaX;

class DocenteController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:docente');
    }

    public function index()
    {       	       
    	return view('docente.docente_home');
    }

    public function edit()
    {

    	return view('docente.docente_edit');
    }

     public function update(Request $request, $id)
    {
        //Reglas de validacion
        $rules = [
            'name' => 'required|min:4', 
            'apellidoP' => 'required', 
            'apellidoM' => 'required', 
            'edad' => 'required|numeric|min:18|max:80' , 
            'email' => 'required|email|max:255' , 
            //'password' => 'required|string|min:6|confirmed' , 
            'telefono_fijo' => 'required', 
            'telefono_cel' => 'required' ,             
        ];

        $messages = [
            'name.required' => 'Debes de colocar un nombre',
            'apellidoP.required' => 'Debes de colocar un apellido paterno',
            'apellidoM.required' => 'Debes de colocar un apellido materno',
            'edad.required' => 'Debes de colocar la edad',          
            'edad.min' => 'La edad minima es 18 años',
            'edad.max' => 'La edad maxima es 80 años',
            'email.required' => 'Debes de colocar un correo electronico',
            'email.email' => 'Solo se aceptan correos electronicos',            
            'password.required' => 'Debes de colocar una contraseña',
            'password.min' => 'La contraseña debe tener por lo menos 6 digitos',
            'password.confirmed' => 'La contraseña no coinciden',
            'telefono_fijo.required' => 'Debes de colocar un telefono fijo',
            'telefono_cel.required' => 'Debes de colocar un telefono celular',
        ];

        $this->validate($request,$rules,$messages);

        $docente = Docente::find($id); 
        $docente->name = $request->input('name');
        $docente->apellidoP = $request->input('apellidoP');
        $docente->apellidoM = $request->input('apellidoM');
        $docente->edad = $request->input('edad');
        $docente->email = $request->input('email');
        $docente->telefono_fijo = $request->input('telefono_fijo');
        $docente->telefono_cel = $request->input('telefono_cel');                  
        $docente->password = Hash::make($request->input('password'));        
        //$docente->password = bcrypt($request->input('password'));
        $docente->remember_token = str_random(100);
        $docente->save(); //Actualiza los datos
        $mensaje = 'Datos actualizados exitosamente';
        return redirect('docente')->with(compact('mensaje'));
    }

    public function tutorias()
    {        
        $docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        $grupo_alumno = $materia_grupo->alumnos()->where('grupo_id',$materia_grupo->id)->get(); //Grupo/alumno
        
        $entrevista_alumno = Entrevista_Fresca_Alumno::where('descripcion','Finalizo la entrevista')->get();            
        $entrevista_no = Entrevista_Fresca_Alumno::where('descripcion','Inicio la entrevista')->get();
        
        $entrevista_padre = Entrevista_Fresca_Padre::where('descripcion','Finalizo la entrevista')->get();
        $entrevistaPadre_No = Entrevista_Fresca_Padre::where('descripcion','Inicio la entrevista')->get();                
        
    	return view('docente.tutorias.docente_tutor')->with(compact('entrevista_alumno','entrevista_no','entrevista_padre','entrevistaPadre_No','materia_grupo','docente_materia'));
    }

    public function entrevista_alumno($alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $entrevista = Entrevista_Fresca_Alumno::where('alumno_id',$alumno->nia)->first();        
        return view('docente.tutorias.resultados_alumno')->with(compact('entrevista','alumno'));
    }

    public function entrevista_padre($alumno_id)
    {                    
        $entrevista = Entrevista_Fresca_Padre::where('alumno_id',$alumno_id)->first();                
        //$marca_x = MarcaX::all();   
        //dd($marca_x);
        return view('docente.tutorias.resultados_padre')->with(compact('entrevista'));
    }
}
