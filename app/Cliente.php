<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = [];
    
    public function presupuesto()
    {
    	return $this->hasMany('App\Presupuesto');
    }

    public function presupuestovivienda()
    {
    	return $this->hasMany('App\Presupuestovivienda');
    }
}