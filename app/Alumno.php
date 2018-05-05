<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = "alumno";
    
    protected $fillable = ['id','nombres','apellido_p','apellido_m','sexo','telefono','domicilio','carrera','periodo','semestre','correo','contraseña',];
}
