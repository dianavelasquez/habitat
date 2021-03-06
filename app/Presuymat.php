<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presuymat extends Model
{
    protected $guarded = [];

    public function presupuestovivienda()
    {
    	return $this->belongsTo('App\Presupuestovivienda');
    }

    public function materialvivienda()
    {
    	return $this->belongsTo('App\Materialvivienda');
    }
}
