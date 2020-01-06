<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    public function bodega(){
        return $this->belongsTo('App\bodega');
    }

    protected $fillable = ['nombre','descripcion','año','alcohol','tipo','id_bodega'];
}
