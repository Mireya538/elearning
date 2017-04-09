<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function list () {
    	$cursos = Curso::all();
    	return view('Cursos', compact('cursos'));
    }
}
