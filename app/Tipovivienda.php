<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipovivienda extends Model
{
    protected $guarded = [];

    public function presupuestovivienda()
    {
    	return $this->hasMany('App\Presupuestovivienda');
    }
}