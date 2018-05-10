<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('nacionalidad');
            $table->date('fecha_nacimiento');
            $table->string('sexo', 1);
            $table->string('cne', 2);
            $table->integer('tiempo_comunidad');
            $table->string('discapacidad');
            $table->string('pension');
            $table->string('estado_civil');     
            $table->string('numero_celular');      
            $table->string('numero_oficina')->nullable();
            $table->string('numero_hogar');
            $table->string('nivel_instruccion');         
            $table->string('es_empleado');   
            $table->string('profesion'); 
            $table->string('clasificacion_ingreso');
            $table->float('ingreso', 20,3);
            $table->string('parentesco')->nullable();

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('miembros');
    }
}
