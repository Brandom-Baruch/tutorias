<?php


namespace App\Http\Controllers\Director\alumno;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Alumno;
use App\Grupo;

class AlumnoController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->autorizarPuestos('Director'); 
    	$alumnos = Alumno::orderBy('name')->paginate(10);        
    	return view('director.alumno.alumno_index')->with(compact('alumnos'));
    }

    public function create(Request $request)        
    {
        $request->user()->autorizarPuestos('Director'); 
        $grupos = Grupo::all();
    	return view('director.alumno.alumno_create')->with(compact('grupos'));
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

        $mensaje = 'Se ha agregado el alumno ' .$alumno->name . ' exitosamente.';
        return redirect('director/alumnos/index')->with(compact('mensaje'));        
    }

    public function edit(Request $request,$nia)
    {             
        $request->user()->autorizarPuestos('Director');   
        $alumno = Alumno::find($nia);        
        $grupo = Grupo::all();
        return view('director.alumno.alumno_edit')->with(compact('alumno','grupo'));
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

        $mensaje = 'Se ha actualizado  el alumno ' .$alumno->name . ' exitosamente.';
        return redirect('director/alumnos/index')->with(compact('mensaje'));       
    }

    public function destroy ($nia)
    {
        $alumno = Alumno::find($nia);
        $alumno->delete(); //Eliminamos al docente
        $eliminado = 'Se ha eliminado el Alumno '.$alumno->name . ' nia: ' . $alumno->nia;
        return back()->with(compact('eliminado'));

    }

    public function show(Request $request, $nia)
    {
        $request->user()->autorizarPuestos('Director'); 
        $alumno = Alumno::find($nia);     
        $grupo = Grupo::find($alumno->grupo->id);        
        $materia = $grupo->materias()->get();        
        return view('director.alumno.alumno_show')->with(compact('alumno','grupo','materia'));                    
    }
}
