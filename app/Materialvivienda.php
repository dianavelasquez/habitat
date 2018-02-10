<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materialvivienda extends Model
{
    protected $guarded = [];
    public function presupuestovivienda()
    {
    	return $this->hasMany('App\Presupuestovivienda');
    }
}
