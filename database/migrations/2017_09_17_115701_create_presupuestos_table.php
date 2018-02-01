<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *cliente_id
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->integer('tipomejora_id')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('albanil_id')->unsigned();
            $table->double('total',8,2);
            $table->integer('estado')->default(1);
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('tipomejora_id')->references('id')->on('tipomejoras');
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
        Schema::dropIfExists('presupuestos');
    }
}
