<?php

namespace App\Http\Controllers\Auth\Docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Docente;

class DocenteLoginController extends Controller
{
    
    //use RedirectsUsers, ThrottlesLogins;

    public function __construct()
	{
		$this->middleware('guest:docente',['only' => 'showLoginForm']);
	}

    public function showLoginForm()
    {
        return view('auth.docente.docente-login');
    }

    public function login(Request $request)
    {
    	//validation
    	$rules = [
    		'email' => 'required|string',
    		'password' => 'required|string',
    	];


        $meesage = [
            'email.required' => 'Debes de colocar tu correo electronico',
            'password.required' => 'Debes de colocar tu contraseña'
        ];


    	$this->validate($request,$rules,$meesage);

    	//dd($request->all());

    	if(Auth::guard('docente')->attempt(['email' => $request->email, 'password' => $request->password]))
    	{            
    		return redirect('/docente');
    	}else{            
            $mensaje = 'Correo o contraseña equivocadas. Intentelo de nuevo';
    		return back()
            ->withInput($request->only('email'))
            ->with(compact('mensaje')); //Solo muestra el correo electronico
        }

	}

}
