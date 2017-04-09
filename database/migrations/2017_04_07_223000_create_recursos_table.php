<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('url');
            $table->integer('visible');
            $table->integer('secuencia');
            $table->string('notas');
            $table->integer('estado');
            $table->integer('tipo_recurso_id')->index()->unsigned()->nullable();
            $table->integer('semana_id')->index()->unsigned()->nullable();
            $table->foreign('tipo_recurso_id')->references('id')->on('tipo_recurso')->onDelete('cascade');
            $table->foreign('semana_id')->references('id')->on('semana')->onDelete('cascade');
        });


       /*Schema::table('recurso', function($table) {
            $table->foreign('curso')->references('id')->on('curso')->onDelete('cascade');
       });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso');
    }
}
