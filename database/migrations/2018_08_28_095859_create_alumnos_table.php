<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carne');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('encargado_id')->unsigned();
            $table->string('historial');
            $table->string('codigopersonal');
            $table->integer('cui');
            $table->string('fechanacimiento');
            $table->integer('grado_id')->unsigned();
            $table->integer('seccion_id')->unsigned();
            $table->foreign('grado_id')
                  ->references('id')
                  ->on('grados');
            $table->foreign('seccion_id')
                  ->references('id')
                  ->on('secciones');
            $table->foreign('encargado_id')
                  ->references('id')
                  ->on('encargados');
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
        Schema::dropIfExists('alumnos');
    }
}
