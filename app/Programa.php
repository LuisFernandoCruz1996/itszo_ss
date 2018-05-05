<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "programas";
    
    protected $fillable = ['id','no_control','dependencia_of','titular_dep','puesto_dep','nombre_programa', 	'modalidad','fecha_inicio','fecha_terminacion','programa_actividad','tip_pro',];
}
