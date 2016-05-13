<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProyectoController extends Controller
{


    public function principal(){
		return view('principal');
		}
<<<<<<< HEAD
    public function RegistroEgresados(){
		return view('RegistroEgresados');
		}

=======
	public function registro(){
		return view('registro');
	}
>>>>>>> 2e1b2a6ac8e23926fd0d6a22229b740a8d9f019f

}
