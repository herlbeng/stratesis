<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cliente')->nullable();
            $table->string('referencia')->nullable();
            $table->string('modo')->nullable();
            $table->string('banco')->nullable();
            $table->string('monto')->nullable();
            $table->string('proyecto')->nullable();
            $table->string('estado')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagos');
    }
}
