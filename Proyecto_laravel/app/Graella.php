<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graella extends Model
{ 
    public function programas()
    {
        return $this->belongsToMany('App\Programa');
    }  
}
