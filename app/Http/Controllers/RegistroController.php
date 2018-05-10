<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Miembro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegistroController extends Controller
{
    //


    public function guardar(Request $request)
    {
        //validar informacion entrante del formulario
    	$this->validate($request, [
            'cedula'=>'required|unique:miembros,cedula|digits_between:1,11',
            'primer_nombre'=>'required|alpha|min:4',
            'segundo_nombre'=>'required|alpha|min:4',
            'primer_apellido'=>'required|alpha|min:4',
            'segundo_apellido'=>'required|alpha|min:4',
            'fecha_nacimiento'=>'required',
            'sexo'=>'required',
            'cne'=>'required',
            'tiempo_comunidad'=>'required|digits_between:1,2',
            'numero_celular'=>'required|unique:miembros,numero_celular|digits_between:1,11',
            'numero_oficina'=>'digits_between:1,11',
            'numero_hogar'=>'required|digits_between:1,11',
            'correo'=>'email|unique:users,email|required',
            'es_empleado'=>'required',
            'profesion'=>'required|string',
            'ingreso'=>'required|numeric',
            'discapacidad' => 'required|alpha',
            'pension' => 'required|alpha',
            'estado_civil' => 'required',
            'nivel_instruccion' => 'required',
            'clasificacion_ingreso' => 'required|string',
            'actividad_comercial' => 'required|string',
            'contraseña' => 'required|confirmed'
        ]);

    	//registrar la familia

        $familia = Familia::create([
            'cedula_jefe' => $request->cedula,
            'actividad_comercial' => $request->actividad_comercial,
            'ingreso_mensual' => $request->ingreso
        ]);

        //registrar miembro de familia en este caso sera siempre el primero (jefe familiar)

        $miembro = Miembro::create([
            'cedula' => $request->cedula,
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre'=> $request->segundo_nombre,
            'primer_apellido'=> $request->primer_apellido,
            'segundo_apellido'=> $request->segundo_apellido,
            'nacionalidad'=> $request->nacionalidad,
            'fecha_nacimiento'=> $request->fecha_nacimiento,
            'sexo'=> $request->sexo,
            'cne'=> $request->cne,
            'tiempo_comunidad'=> $request->tiempo_comunidad,
            'discapacidad'=> $request->discapacidad,
            'pension'=> $request->pension,
            'estado_civil'=> $request->estado_civil,
            'numero_celular'=> $request->numero_celular,
            'numero_oficina'=> $request->numero_oficina,
            'numero_hogar'=> $request->numero_hogar,
            'nivel_instruccion'=> $request->nivel_instruccion,
            'es_empleado'=> $request->es_empleado,
            'profesion'=> $request->profesion,
            'clasificacion_ingreso'=> $request->clasificacion_ingreso,
            'ingreso'=> $request->ingreso,
            'parentesco'=> $request->parentesco,
            'id_familia'=> $familia->id,
        ]);

        //luego se procede a crear la cuenta del usuario y se le asigna a 1 el paso de registro

        User::create([
            'name' => $miembro->cedula,
            'email' => $request->correo,
            'password' => bcrypt($request->contraseña),
            'step' => 1,
            'id_miembro' => $miembro->id
        ]);

        //finalmente se redirecciona a la vista de inicio de sesion

        return redirect()->route('login');

    }
}
