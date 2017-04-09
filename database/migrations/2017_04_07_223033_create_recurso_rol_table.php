<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->index()->unsigned()->nullable();
            $table->integer('recurso_id')->index()->unsigned()->nullable();
            $table->integer('estado');
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade');
            $table->foreign('recurso_id')->references('id')->on('recurso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso_rol');
    }
}
