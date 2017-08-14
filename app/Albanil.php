<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class albanil extends Model
{
    protected $fillable = [
        'nombre','dui', 'nit', 'direccion','cuenta', 'id_cliente',
    ];
}
