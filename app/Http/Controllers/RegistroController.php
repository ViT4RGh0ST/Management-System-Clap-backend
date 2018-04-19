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


    public function store(Request $request)
    {

    	$validatedData = $request->validate([
        'cedula'=>'required|unique:miembros|alpha_dash|min:7|max:11',
        'primer_nombre'=>'required|alpha|min:4',
        'segundo_nombre'=>'required|alpha|min:4',
        'primer_apellido'=>'required|alpha|min:4',
        'segundo_apellido'=>'required|alpha|min:4',
        'fecha_nacimiento'=>'required',
        'sexo'=>'required',
        'cne'=>'required',
        'tiempo_comunidad'=>'required|numeric|max:2',
        'tipo_discapacidad'=>'required|alpha',
        'tipo_pension'=>'required|alpha',
        'estado_civil'=>'required',
        'numero_celular'=>'required|numeric|min:14|max:14',
        'numero_oficina'=>'required|numeric|min:14|max:14',
        'numero_hogar'=>'required|numeric|min:14|max:14',
        'correo'=>'email|unique:miembros|required',
        'nivel_instruccion'=>'required',
        'es_empleado'=>'required',
        'profesion'=>'required|alpha',
        'tipo_institucion'=>'required|alpha',
        'embarazo_precoz'=>'required',
        'clasificacion_ingreso'=>'required|alpha',
        'ingreso'=>'required|numeric',

       
   ]);
      
    }
}
