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

    public static function roles()
    {
        return Role::where('usuario_id', '=', $primarykey);
    }
}