<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestodetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestodetalles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_material')->unsigned();
            $table->integer('cantidad');
            $table->double('preciou',8,2);
            $table->integer('id_presupuesto')->unsigned();
            $table->foreign('id_presupuesto')->references('id')->on('presupuestos');
            $table->foreign('id_material')->references('id')->on('materials');
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
        Schema::dropIfExists('presupuestodetalles');
    }
}
