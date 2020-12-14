<?php

namespace App\Http\Controllers\Alumno;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Padre_familia as padres;
use App\Alumno;
use App\Grupo;
use App\Parentezco;

class AlumnoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:alumno');
    }


    public function index()
    {    	
        return view('alumno.alumno_home'); //Mostrar la información del alumno
    }

    public function edit()
    {    	
    	$grupos = Grupo::all();
    	return view('alumno.alumno_edit')->with(compact('grupos'));
    }

     public function update(Request $request, $nia)
    {
         $rules = [
            
            'name' => 'required|min:3',
            'edad' => 'required|numeric|min:15|max:60',
            'apellidoP' => 'required|min:4',
            'apellidoM' => 'required|min:4',
            'fechaN' => 'required|date',
            'genero' => 'required',
            'phone' => 'required',
            'email' => 'required|max:250',
            'password' => 'required|string|min:6|confirmed',            
            'grupo_id' =>  'required',          
        ];

        $message = [
                       
            'name.required' => 'Debes de colocar un nombre al alumno',
            'name.min' => 'El nombre debe de tener por lo menos 3 caracteres',
            'apellidoP.required' => 'Debes de colocar un apellido paterno al alumno',
            'apellidoP.min' => 'El apellido paterno debe de tener por lo menos 3 caracteres',
            'apellidoM.required'=> 'Debes de colocar un apellido materno al alumno',
            'apellidoM.min' => 'El apellido materno debe de tener por lo menos 3 caracteres',
            'fechaN.required' => 'Debe de colocar su fecha de nacimiento',
            'fechaN.date' => 'Este campo solo acepta la fecha de nacimiento del alumno',            
            'genero.required' => 'Debes de colocar el genero del alumno',
            'phone.required' => 'Debes de colocar el numero telefonico del alumno',
            'email.required' => 'Debes de colocar el correo electronico del alumno',            
            'email.max' => 'Solamente puedes colocar 255 caracteres',
            'password.required' => 'Debes de colocar una contraseña',
            'password.min' => 'La contraseña minima debe tener 6 caracteres',
            'password.confirmed' => 'No coinciden la contraseña, intentalo de nuevo',
            'grupo_id.required' => 'Debes de asignar un grupo al alumno',
        ];

        //Si ocurre un error en algun campo
        $this->validate($request,$rules,$message); // Ejecutamos las reglas de validacion
        //En caso contrario empezamos a registrar los datos

        //Creamos un objeto de la clase alumno

        $alumno = Alumno::find($nia);
        $alumno->nia = $alumno->nia;
        $alumno->name = $request->input('name');
        $alumno->edad = $request->input('edad');
        $alumno->apellidoP = $request->input('apellidoP');     
        $alumno->apellidoM = $request->input('apellidoM');
        $alumno->fechaN = $request->input('fechaN');
        $alumno->genero = $request->input('genero');
        $alumno->phone = $request->input('phone');
        $alumno->email = $request->input('email');
        $alumno->password = Hash::make($request->input('password'));
        $alumno->grupo_id = $request->input('grupo_id');
        $alumno->remember_token = str_random(100);
        $alumno->save();

        $mensaje = 'Se han actualizado tus datos exitosamente ';
        return redirect('/alumno')->with(compact('mensaje'));       
    }

    /*public function parentezco_create()
    {
        $padres = padres::all();
        return view('alumno.alumno_parentezco')->with(compact('padres'));
    }

    public function parentezco_store(Request $request, $nia)
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
        $parentezco->alumno_id = $alumno->nia;
        $parentezco->padre_id = $request->input('padre_id');
        $parentezco->save();
        $mensaje = 'Se ha agregado el familiar. ¿Quieres agregar otro familiar?';
        return back()->with(compact('mensaje'));
    }

    public function parentezco_destroy($nia, $padre_id)
    {
        $alumno = Alumno::find($nia);
        $padre = padres::find($padre_id);
        $alumno->padres()->detach($padre->id);
        $eliminado = 'Se ha quitado el familiar exitosamente';
        return back()->with(compact('eliminado'));
        
    }*/
   
}
