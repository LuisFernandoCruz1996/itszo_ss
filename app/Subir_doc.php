<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subir_doc extends Model
{
    protected $table = "subir_docs";
    
    protected $fillable = ['id','no_control','nombre_doc','bimestre',];

    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }
}
