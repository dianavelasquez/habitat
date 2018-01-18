<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $guarded = [];

    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

    public function tipomejora()
    {
    	return $this->belongsTo('App\Tipomejora');
    }

    public function presupuestodetalle()
    {
    	return $this->hasMany('App\Preupuestodetalle');
    }
}
