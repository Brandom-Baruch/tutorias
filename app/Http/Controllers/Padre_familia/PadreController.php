<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PadreController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth:padre');
    }


     public function index()
    {
    	return view('padre_familia.padre_home');
    }
}
