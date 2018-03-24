<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliacionCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliacion_credito', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula');
            $table->integer('num_tarjeta');
            $table->string('propietario');
            $table->string('correo');
            $table->string('tipo');
            $table->string('f_vencimiento');
            $table->integer('cod_validacion');

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
        Schema::dropIfExists('afiliacion_credito');
    }
}
