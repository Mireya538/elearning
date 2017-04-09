<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'rol';

    public static function roles ($id)
    {
    	return Role::all()->where('usuario_id', $id);
    }
}
