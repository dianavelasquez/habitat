<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteFechaFromPresupuestoviviendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('presupuestoviviendas', function (Blueprint $table) {
            $table->dropColumn('fecha');
            $table->dropForeign('presupuestoviviendas_materialvivienda_id_foreign');
            $table->dropColumn('materialvivienda_id');
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
            $table->date('fecha');
            $table->integer('materialvivienda_id')->unsigned();
            $table->foreign('materialvivienda_id')->references('id')->on('materialviviendas');
        });
    }
}
