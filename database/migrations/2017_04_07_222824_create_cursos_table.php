<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('duracion');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_final');
            $table->integer('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
