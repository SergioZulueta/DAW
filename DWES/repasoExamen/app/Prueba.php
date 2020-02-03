<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    public function Desafios(){
        return $this->hasMany('App\Desafio');
    }
}
