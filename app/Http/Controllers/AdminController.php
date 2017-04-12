<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserRole;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
        $grant_roles = UserRole::all()->where('usuario_id', $id);
        return view('admin', ['grant_roles' => $grant_roles]);
    }
}
