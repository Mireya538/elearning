<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semana', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tema');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_final');
            $table->integer('visible');
            $table->integer('estado');
            $table->integer('curso_id')->index()->unsigned()->nullable();
        });


       Schema::table('semana', function($table) {
            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semana');
    }
}
