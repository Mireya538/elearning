<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public $rol_id;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->rol_id = 0;
    }

    public function getID()
    {
        return $this->rol_id; 
    }

    public function setID($id)
    {
        $this->rol_id =  $id;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =  Auth::user()->id;
        $grant_roles = DB::table('usuario_rol')->get()->where('usuario_id', '=', $id);
        $roles = DB::table('rol')->get();
        $edit_roles = DB::table('rol')->select('nombre')->where('id', '=', $this->getID())->get();
        return view('role', ['grant_roles' => $grant_roles, 'roles' => $roles, 'edit_roles' => $edit_roles]);
    }


    public function insertRole(Request $data)
    {
        DB::table('rol')->insert(['nombre' => $data->input('name'), 'estado' => 0]);
        return $this->index();
    }

    public function updateRole(Request $data)
    {
        DB::table('rol')->update(['nombre' => $data->input('name')]);
        return $this->index();
    }

    public function role($id)
    {   
        $this->setID($id);
        $user_id =  Auth::user()->id;
        $grant_roles = DB::table('usuario_rol')->get()->where('usuario_id', '=', $user_id);
        $roles = DB::table('rol')->get();
        $edit_roles = DB::table('rol')->select('nombre')->where('id', '=', $this->getID())->get();
        return redirect()->route('role', ['grant_roles' => $grant_roles, 'roles' => $roles, 'edit_roles' => $edit_roles]);
    }
}
