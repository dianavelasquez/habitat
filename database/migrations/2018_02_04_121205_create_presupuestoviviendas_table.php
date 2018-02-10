<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoviviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestoviviendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->integer('tipovivienda_id')->unsigned();
            $table->date('fecha');
            $table->integer('materialvivienda_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('tipovivienda_id')->references('id')->on('tipoviviendas');
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
        Schema::dropIfExists('presupuestoviviendas');
    }
}
