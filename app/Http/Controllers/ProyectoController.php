<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProyectoController extends Controller
{


    public function principal(){
		return view('principal');
		}
	public function registro(){
		return view('registro');
	}

}
