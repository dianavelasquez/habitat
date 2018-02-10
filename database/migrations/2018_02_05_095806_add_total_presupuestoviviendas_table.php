<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTotalPresupuestoviviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('presupuestoviviendas', function (Blueprint $table) {
            $table->double('total',8,2);
            $table->date('fechabaja')->nullable();
            $table->integer('estado')->default(1);
            $table->string('motivo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('presupuestoviviendas', function (Blueprint $table) {
            //
        });
    }
}
