<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
	protected $table = "grados";

    protected $fillable = ['nombre', 'descripcion'];

    public function secciones(){
    	return $this->hasMany('App\Seccion');	
    }
     
    public function alumnos(){
     	return $this->hasMany('App\Alumno');
    }
}
