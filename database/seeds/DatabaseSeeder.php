<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* Users */
        DB::table('usuario')->insert([
            'nombre' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'genero' => 'genero',
            'pais' => 'pais'
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'genero' => 'genero',
            'pais' => 'pais'
        ]);


        DB::table('usuario')->insert([
            'nombre' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'genero' => 'genero',
            'pais' => 'pais'
        ]);

        /* Rols */ 
        DB::table('rol')->insert([
            'nombre' => 'superadmin',
            'estado' => '0'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'admin',
            'estado' => '1'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'user',
            'estado' => '2'
        ]);

        /* Usuario Rol */ 
        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 3,
            'usuario_id' => 3
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 1
        ]);

    }
}


