<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
   	protected $table = "encargados";

    protected $fillable = ['nombre', 'apellido', 'parentesco', 'dpiencargado', 'telefono', 'direccion', 'email', 'encargadoaux', 'parentescoaux', 'telefonoaux'];

    public function alumnos(){
    	return $this->hasMany('App\Alumno');
    }
}
