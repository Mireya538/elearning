<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->index()->unsigned()->nullable();
            $table->integer('usuario_id')->index()->unsigned()->nullable();
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
