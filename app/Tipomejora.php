<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomejora extends Model
{
    protected $guarded = [];
    
    public function presupuesto()
    {
    	return $this->hasMany('App\Presupuesto');
    }
}
