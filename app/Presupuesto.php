<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Presupuesto extends Model
{
    protected $guarded = [];
    protected $dates = ['created_at'];
}
