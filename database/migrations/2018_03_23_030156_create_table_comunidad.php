<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComunidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');          
            $table->string('ciudad');          
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('sector');           

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
        Schema::dropIfExists('comunidad');
    }
}
