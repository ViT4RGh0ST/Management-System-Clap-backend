<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionFamiliaMiembro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('miembros', function (Blueprint $table) {

            $table->integer('id_familia')->unsigned()->nullable();
            $table->foreign('id_familia')->references('id')->on('miembros');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('miembros', function (Blueprint $table) {
            $table->dropForeign(['id_familia']);
            $table->dropColumn('id_familia');
        });
    }
}
