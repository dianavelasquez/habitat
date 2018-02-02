<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $guarded = [];

    public function presupuestodetalle()
    {
    	return $this->hasMany('App\Presupuestodetalle');
    }

    public function presupuesto()
    {
    	return $this->hasMany('App\Presupuesto');
    }
}
