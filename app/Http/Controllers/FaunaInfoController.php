<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaunaInfoController extends Controller
{
    //
    public function index()
    {
    	return view('faunaBienvenido');
    }
    

    public function nosotros()
    {
    	return view('nosotros');
    }
    public function contacto()
    {
    	return view('contacto');
    }
    
    
}
