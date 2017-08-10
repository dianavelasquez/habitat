<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nombre','dui', 'nit', 'direccion','ubicacion', 'tiposolucion','cod_sim','taza','fechafin',
    ];
}
