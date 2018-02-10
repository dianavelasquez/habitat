<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $guarded = [];
    protected $dates = ['fecha_inicio','fecha_fin'];

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
    public function albanil()
    {
        return $this->belongsTo('App\Albanil');
    }

}
