<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   	protected $table = "alumnos";

    protected $fillable = ['carne', 'nombre', 'apellido', 'encargado_id', 'historial', 'codigopersonal', 'cui', 'fechanacimiento', 'grado_id', 'seccion_id'];

    public function grado(){
    	return $this->belongsTo('App\Grado');	
    }

    public function seccion(){
    	return $this->belongsTo('App\Seccion');	
    }

    public function encargado(){
    	return $this->belongsTo('App\Encargado');
    }
}
