<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desafio extends Model
{

    public function Prueba(){
        return $this->belongsTo('App\Prueba');
    }

}
