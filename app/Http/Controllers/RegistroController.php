<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
class RegistroController extends Controller
{
    //
    public function create()
    {
       return view('home');
    }


    public function guardar(Request $request)
    {

    	$this->validate($request, [
        'cedula'=>'required|unique:miembros|digits_between:1,11',
        'primer_nombre'=>'required|alpha|min:4',
        'segundo_nombre'=>'required|alpha|min:4',
        'primer_apellido'=>'required|alpha|min:4',
        'segundo_apellido'=>'required|alpha|min:4',
        'fecha_nacimiento'=>'required',
        'sexo'=>'required',
        'cne'=>'required',
        'tiempo_comunidad'=>'required|digits:2',
        'discapacidad'=>'required|alpha',
        'pension'=>'required|alpha',
        'estado_civil'=>'required',
        'numero_celular'=>'required|unique:miembros|digits_between:1,11',
        'numero_oficina'=>'required|digits_between:1,11',
        'numero_hogar'=>'required|digits_between:1,11',
        'correo'=>'email|unique:miembros|required',
        'nivel_instruccion'=>'required',
        'es_empleado'=>'required',
        'profesion'=>'required|alpha',
        'ingreso'=>'required|numeric',
        'clasificacion_ingreso'=>'required|string',

   ]);
        
    }
}
