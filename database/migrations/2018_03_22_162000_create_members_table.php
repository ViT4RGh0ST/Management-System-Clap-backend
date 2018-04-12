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
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('nacionalidad', 1);
            $table->date('fecha_nacimiento');
            $table->string('sexo', 1);
            $table->string('cne', 1);
            $table->integer('tiempo_comunidad');
            $table->string('tipo_discapacidad');
            $table->string('tipo_pension');
            $table->string('estado_civil');     
            $table->string('numero_celular');      
            $table->string('numero_oficina'); 
            $table->string('numero_hogar');     
            $table->string('correo');
            $table->string('nivel_instruccion');         
            $table->string('es_empleado');   
            $table->string('profesion'); 
            $table->string('tipo_institucion');        
            $table->string('embarazo_precoz', 1);       
            $table->string('clasificacion_ingreso');
            $table->float('ingreso', 8,3);
            
            $table->timestamps();

            $table->integer('id_familia')->unsigned();

            $table->foreign('id_familia')->references('id')->on('familias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
