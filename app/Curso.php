<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
   	protected $table = "cursos";

    protected $fillable = ['nombre', 'gradoid', 'userid'];

    public function secciones(){
    	return $this->belongsToMany('App\Seccion');	
    }
}
