<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Des_doc extends Model
{
    protected $table = "des_docs";
    
    protected $fillable = ['id','usuario_id','nombre_doc', ];
}
