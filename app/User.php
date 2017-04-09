<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    protected $table = 'usuario';
	// public $timestamps = false;
    public $primarykey = 'id';
    
    use Notifiable;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nombre', 'email', 'password','genero', 'pais'
    ];
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password',
    ];


    // protected function getRoles()
    // {//select * from elearning.usuario, elearning.usuario_rol where elearning.usuario.id = elearning.usuario_rol.usuario_id;
    //     $roles = ;
    //     // $roles = DB::table('usuario_rol')->select('id')->where('usuario_id', '=', $this->id);
    //     return $roles;
    // }

    public static function roles()
    {
        return Role::where('usuario_id', '=', $primarykey);
    }
}