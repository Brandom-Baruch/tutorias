<?php

namespace App\Http\Controllers\Docente\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriaController extends Controller
{
    public function create()
    {
    	return view('docente/director/materia/materia_create');
    }
}
