<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->index()->unsigned()->nullable();
            $table->integer('curso_id')->index()->unsigned()->nullable();
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade');
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
        Schema::dropIfExists('curso_rol');
    }
}
