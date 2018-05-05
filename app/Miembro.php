<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    //

    protected $fillable = [
        'cedula',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'nacionalidad',
        'fecha_nacimiento',
        'sexo',
        'cne',
        'tiempo_comunidad',
        'discapacidad',
        'pension',
        'estado_civil',
        'numero_celular',
        'numero_oficina',
        'numero_hogar',
        'nivel_instruccion',
        'es_empleado',
        'profesion',
        'clasificacion_ingreso',
        'ingreso',
        'parentesco',
        'id_familia',
    ];

    protected $table = 'miembros';

    public function usuario(){
        return $this->hasOne('App\User', 'id_miembro');
    }
}
