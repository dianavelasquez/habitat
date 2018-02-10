<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuestovivienda extends Model
{
    protected $guarded = [];

    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

    public function tipovivienda()
    {
    	return $this->belongsTo('App\Tipovivienda');
    }

    public function materialvivienda()
    {
    	return $this->belongsTo('App\Materialvivienda');
    }
}
