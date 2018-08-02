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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('/saludos/{nombre?}', function ($nombre = "invitado") {
	$maquinas = ['tractor', 
	'tren',
	'casino'
	];
    return view('saludos',  compact('nombre', 'maquinas'));
})->where('nombre', "[A-Za-z]+");