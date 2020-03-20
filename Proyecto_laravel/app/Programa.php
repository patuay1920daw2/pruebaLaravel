<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = [
        "namePrograma",
        "descripcio",
        "tipo",
        "clasificacion",
        "idCanal"

    ];
    
    public function canal()
    {
        return $this->belongsTo('App\Canal');
    }  

    public function graelles()
    {
        return $this->belongsToMany('App\Grealla');
    }  

    
}
