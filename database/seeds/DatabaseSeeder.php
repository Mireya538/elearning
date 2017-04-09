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
            'nombre' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'genero' => 'genero',
            'pais' => 'pais'
        ]);


        DB::table('usuario')->insert([
            'nombre' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('editor'),
            'genero' => 'genero',
            'pais' => 'pais'
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'moderador',
            'email' => 'moderador@gmail.com',
            'password' => bcrypt('moderador'),
            'genero' => 'genero',
            'pais' => 'pais'
        ]);

        /* Rols */ 
/*Administrador:Tiene   acceso   completo   a   la   plataforma.   Puede   editar recursos  y  cursos  según  disponga.  Puede  crear  usuarios  y  roles  para  el ingreso a la plataforma.

Editor:El editor puede ingresar a los cursos, y editar recursos. Sin embargo,no puede crear usuarios ni roles, ni cursos.

Moderador: Este rol se encarga de hacer revisiones sobre la plataforma. No puede editar recursos, pero si puede acceder a ver cursos y revisiones de los recursos.No puede crear usuarios ni roles, ni cursos.

Estudiante: El  rol  de  estudiante  permite  acceder  al  curso  en  el cual está matriculado  actualmente.  Puede  ver  los  recursos  de  su  curso,  no  los  puede editar. Es el rol para un usuario que accede a la plataforma de aprendizaje a ver sus cursos matriculados.  No puede crear usuarios ni roles, ni cursos, ni siquiera   debería   tener   acceso   de   consulta   a   algún   módulo   de   la administración.

Profesor:El  rol  de  profesor  le  permite  acceder  al  curso(s)  que  está impartiendo en determinado momento. Puede ver y editar y crear los recursos de sus cursos. No puede crear usuarios ni roles, ni cursos, ni siquiera debería tener acceso de consulta a algún módulo de la administración.*/

        DB::table('rol')->insert([
            'nombre' => 'Admin',
            'estado' => '0'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Editor',
            'estado' => '0'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Moderador',
            'estado' => '0'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Estudiante',
            'estado' => '0'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Profesor',
            'estado' => '0'
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


