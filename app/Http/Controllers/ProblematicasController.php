<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Problematica;
use \App\Solucione;

class ProblematicasController extends Controller
{
    //
    public function problematicas()
    {
    	$listaProblemas = Problematica::all();

    	return view('problematicas')->with(['problemas'=>$listaProblemas]);;
    }
    public function guardarSolucion(Request $request)
    {
    	$fecha = new \DateTime(); 

    	$solucion = new Solucione;
    	$solucion->idProblema = $request->input('idProblema');
    	$solucion->descripcion = $request->input('contenidoSolucion');
    	$solucion->fechaPropuesta = $fecha->format('Y-m-d');
    	$solucion->save();

    	return view('solucionGuardada');
    }
    public function mostrarSoluciones(Request $request)
    {
        if($request->ajax())
        {
            $soluciones = Solucione::where('idProblema',$request->input('id'))->get();
            
            return response()->json($soluciones);
        
        }
        // $soluciones = Solucione::where('idProblema',$request->input('id'))->get();
        
        // dd($soluciones);
         // if ($request->ajax())
         // {
           


           
        // }
    }
}
