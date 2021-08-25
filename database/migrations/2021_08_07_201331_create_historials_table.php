<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
          //$table->unsignedInteger('tratamiento_id');
            $table->string('pieza');
            $table->date('fecha');
            $table->string('estado');
            $table->string('observaciones');
            $table->timestamps();

            $table->foreign('paciente_id')
            ->references('id')->on('pacientes')
            ->onDelete('cascade');

           //$table->foreign('tratamiento_id')
           //->references('id')->on('tratamienstos')
           //->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historials');
    }
}
