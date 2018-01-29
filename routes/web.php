<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FaunaInfoController@index' );
Route::get('/Nosotros', 'FaunaInfoController@nosotros');
Route::get('/Contacto', 'FaunaInfoController@contacto');
Route::get('/Problematicas', 'ProblematicasController@problematicas');
Route::post('/Problematicas/soluciones', 'ProblematicasController@guardarSolucion');
Route::get('/Problematicas/Ideas', 'ProblematicasController@mostrarSoluciones');