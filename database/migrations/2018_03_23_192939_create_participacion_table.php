<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jefe_participa', 1);
            $table->string('familiar_participa', 1);
            $table->string('participa_asamblea', 1);
            $table->string('area_comunal');
            
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
        Schema::dropIfExists('participacion');
    }
}
