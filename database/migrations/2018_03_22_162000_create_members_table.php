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
            $table->string('cne', 1);
            $table->string('sexo', 1);
            $table->string('tipo_discapacidad');
            $table->string('tipo_pension');



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
