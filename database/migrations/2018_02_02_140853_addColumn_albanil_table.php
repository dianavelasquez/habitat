<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAlbanilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('albanils', function (Blueprint $table) {
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
        Schema::table('albanils', function (Blueprint $table) {
            $table->dropColumn('fechabaja');
            $table->dropColumn('estado');
            $table->dropColumn('motivo');
        });
    }
}
