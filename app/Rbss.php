<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rbss extends Model
{
    protected $table = "rbsss";
    
    protected $fillable = ['id','no_control','no_reporte','horas_total','horas_acumuladas',];
}
