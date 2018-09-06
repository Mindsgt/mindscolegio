<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
   	protected $table = "secciones";

    protected $fillable = ['nombre', 'idgrado'];

    public function grado(){
    	return $this->belongsTo('App\Grado');	
    }

    public function alumnos(){
    	return $this->hasMany('App\Alumno');
    }

    public function cursos(){
    	return $this->belongsToMany('App\Curso');
    }
}
