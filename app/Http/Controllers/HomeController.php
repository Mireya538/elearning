<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Role;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // protected $id_role = 0;
    // public function get_id_role() {
    //     return $this->id_role;
    // }
    // public function set_id_role($id) {
    //     $this->id_role = $id;
    // }

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
        $grant_roles = DB::table('usuario_rol')->get()->where('usuario_id', '=', $id);
        $roles = DB::table('rol')->get();
        $edit_roles = DB::table('rol')->select('nombre')->where('id', '=', 0)->get();
        return view('home', ['grant_roles' => $grant_roles, 'roles' => $roles, 'edit_roles' => $edit_roles]);
    }

    public function insertRole(Request $data)
    {
        DB::table('rol')->insert(['nombre' => $data->input('name'), 'estado' => 0]);
        return $this->index();
    }

    public function getEditRole($id)
    {   
        // echo $id;
        // $edit_roles = DB::table('rol')->select('id');
        // echo $edit_roles;
        $edit_roles = DB::table('rol')->select('nombre')->where('id', '=', $id)->get();
        // echo $edit_roles;
        return redirect()->route('home', ['edit_roles' => $edit_roles]);;
    }

}
