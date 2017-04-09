<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Role;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =  Auth::user()->id;
        // $roles = Role::roles($id);
        // return view('home', compact('roles'));

        $roles = DB::table('usuario_rol')->get()->where('usuario_id', '=', $id);;
// // select * from elearning.usuario_rol where elearning.usuario_rol.usuario_id = '3' LIMIT 0, 1000

        return view('home', ['roles' => $roles]);
    }
}
