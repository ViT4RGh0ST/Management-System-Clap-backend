<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    //

    protected $fillable = [
        'cedula_jefe',
        'actividad_comercial',
        'ingreso_mensual',
    ];

    protected $table = 'familias';
}
