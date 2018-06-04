<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = "ss_alumnos";
    
    protected $fillable = ['id','sexo','telefono','domicilio','carrera','periodo','semestre','correo','contraseña',];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function programa()
    {
        return $this->belongsTo('App\Programa');
    }

    public function subir_docs()
    {
        return $this->hasMany('App\Subir_doc');
    }

    public function rbsss()
    {
        return $this->hasMany('App\Rbss');
    }

    public function facualpsss()
    {
        return $this->hasMany('App\Facualpss');
    }

    public function fecualpsss()
    {
        return $this->hasMany('App\Fecualpss');
    }

    public function feapsss()
    {
        return $this->hasMany('App\Feapss');
    }
}
