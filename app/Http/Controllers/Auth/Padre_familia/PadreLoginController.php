<?php

namespace App\Http\Controllers\Auth\Padre_familia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PadreLoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:padre');
	}

    public function showLoginForm()
    {
        return view('auth.padre.padre-login');
    }

    public function login(Request $request)
    {
    	//validation
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	];

    	$this->validate($request,$rules);

    	//dd($request->all());

    	if(Auth::guard('padre')->attempt(['email' => $request->email, 'password' => $request->password]))
    	{
    		return redirect('/padre_familia');
    	}else{
    		return back()->withInput($request->only('email'));
    	}

    }
}
