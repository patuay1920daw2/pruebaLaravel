<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $fillable = [
        "nameCanal"
    ];
    
    public function programas()
    {
        return $this->hasMany('App\Programa');
    }  

}
