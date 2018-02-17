<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Voluntario;

class VoluntariosController extends Controller
{
    public function voluntarios()
    {
    	$listaVoluntarios = Voluntario::all();

    	return view('voluntarios')->with(['voluntarios'=>$listaVoluntarios]);;
    }
}
