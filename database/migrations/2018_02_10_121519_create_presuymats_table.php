<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresuymatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presuymats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('presupuestovivienda_id')->unsigned();
            $table->integer('materialvivienda_id')->unsigned();
            $table->foreign('presupuestovivienda_id')->references('id')->on('presupuestoviviendas');
            $table->foreign('materialvivienda_id')->references('id')->on('materialviviendas');
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
        Schema::dropIfExists('presuymats');
    }
}
