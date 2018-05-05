<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAguasBlancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aguas_blancas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tiene_medidor', 1);        
            $table->string('tiene_deposito', 1);         
            $table->string('tipo_deposito');            
            $table->string('capacidad_deposito');

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
        Schema::dropIfExists('aguas_blancas');
    }
}
