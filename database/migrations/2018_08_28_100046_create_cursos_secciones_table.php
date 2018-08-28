<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_secciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcurso')->unsigned();
            $table->integer('idseccion')->unsigned();
            $table->foreign('idcurso')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('idseccion')->references('id')->on('secciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_secciones');
    }
}
