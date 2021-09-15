<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->unsignedInteger('tratamiento_id');
           // $table->string('formaPago');
            $table->string('pieza');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();

            $table->foreign('paciente_id')
            ->references('id')->on('pacientes')
            ->onDelete('cascade');

            $table->foreign('tratamiento_id')
            ->references('id')->on('tratamientos')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
