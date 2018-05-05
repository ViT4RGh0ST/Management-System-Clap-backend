<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHogarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hogar', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('cantidad_habitaciones');
            $table->string('condicion');
            $table->string('tipo_hogar');  
            $table->string('tipo_tenencia');    
            $table->string('tipo_paredes');        
            $table->string('tipo_techo');   

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
        Schema::dropIfExists('hogar');
    }
}
