<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('usuario')->nullable();
            $table->string('prueba')->nullable();
            $table->string('respuesta')->nullable();
            $table->string('puntaje')->nullable();
            $table->string('estado')->nullable();
            $table->text('notas')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evaluaciones');
    }
}
