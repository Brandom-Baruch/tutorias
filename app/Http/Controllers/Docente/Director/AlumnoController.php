<?php


namespace App\Http\Controllers\Docente\Director;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Alumno;
use App\Grupo;

class AlumnoController extends Controller
{
    public function index()
    {
    	$alumnos = Alumno::paginate(10);
    	return view('docente.director.index')->with(compact('alumnos'));
    }

    public function create()        
    {
        $grupos = Grupo::all();
    	return view('docente.director.alumno.create')->with(compact('grupos'));
    }

    public function store(Request $request)
    {

        $rules = [

    		'nia' => 'required|unique:alumnos|min:8|numeric',
            'name' => 'required|min:3',
            'edad' => 'required|numeric|min:15|max:60',
            'apellidoP' => 'required|min:4',
            'apellidoM' => 'required|min:4',
            'fechaN' => 'required|date',
            'genero' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:alumnos|max:250',
            'password' => 'required|string|min:6|confirmed',            
            'grupo_id' =>  'required',          
        ];

        $message = [

            'nia.required' => 'Debes de colocar su NIA de identificación',
            'nia.unique' => 'Este NIA esta en uso',
            'nia.max' => 'Debes de colocar un NIA minimo de 8 caracteres',
            'nia.numeric' => 'Solo acepta numeros',
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
            'email.unique' => 'Este correo ya esta en uso, debes de colocar otro',
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

        $alumno = new Alumno;
        $alumno->nia = $request->input('nia');
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

        $mensaje_alumno = 'Se ha agregado el alumno ' .$alumno->name . 'exitosamente.';
        return redirect('/director/index')->with(compact('mensaje_alumno'));        
    }

    public function edit($nia)
    {               
        $alumno = Alumno::find($nia);        
        $grupo = Grupo::all();
        return view('docente.director.alumno.edit')->with(compact('alumno','grupo'));
    }

    public function update(Request $request, $nia)
    {
         $rules = [

            'nia' => 'required|min:8|numeric',
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

            'nia.required' => 'Debes de colocar su NIA de identificación',            
            'nia.max' => 'Debes de colocar un NIA minimo de 8 caracteres',
            'nia.numeric' => 'Solo acepta numeros',
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
        $alumno->nia = $request->input('nia');
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

        $mensaje_alumno = 'Se ha actualizado  el alumno ' .$alumno->name . ' exitosamente.';
        return redirect('/director/index')->with(compact('mensaje_alumno'));       
    }

    public function destroy ($nia)
    {
        $alumnos = Alumno::find($nia);
        $alumnos->delete(); //Eliminamos al docente
        $eliminado_alumno = 'Se ha eliminado el Alumno '.$alumnos->name;
        return back()->with(compact('eliminado_alumno'));

    }
}
