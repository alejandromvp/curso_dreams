<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('home');	
    }

    public function saludos($nombre = 'alejandro'){
    	$maquinas = ['tractor', 'tren','casino']; compact('nombre', 'maquinas');
    	return view('saludos',  compact('nombre', 'maquinas'));
    }

}
