<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'usuario_rol';

    public static function roles ($id)
    {
    	return UserRole::all()->where('usuario_id', $id);
    }
}
