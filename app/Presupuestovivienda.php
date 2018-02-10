<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuestovivienda extends Model
{
    protected $guarded = [];

    public function tipovivienda()
    {
    	return $this->belongsTo('App\Tipovivienda');
    }

    public function materialvivienda()
    {
    	return $this->belongsTo('App\Materialvivienda');
    }

    public function presuymat()
    {
    	return $this->hasMany('App\Presuymat');
    }
}
