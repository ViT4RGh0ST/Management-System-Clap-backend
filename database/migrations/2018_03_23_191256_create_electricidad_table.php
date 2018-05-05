<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectricidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricidad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('posee');
            $table->string('tiene_medidor', 1);
            $table->string('tiene_ahorradores', 1);
            $table->integer('ahorradores_requeridos');

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
        Schema::dropIfExists('electricidad');
    }
}
