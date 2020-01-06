<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    public function vinos(){
        return $this->hasMany('App\vino');
    }

    protected $fillable = ['nombre','direccion','telefono','email','contacto','año','restaurante','hotel'];

}
