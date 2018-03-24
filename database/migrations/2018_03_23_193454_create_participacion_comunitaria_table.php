<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionComunitariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacion_comunitaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intervencion_pueblo', 1);
            $table->string('protagonismo_pueblo', 1);
            $table->string('creacion_comunal', 1);
            $table->string('participacion_comunal', 1);

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
        Schema::dropIfExists('participacion_comunitaria');
    }
}
