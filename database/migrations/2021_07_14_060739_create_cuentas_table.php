<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->date('fecha');
            $table->string('pieza');
            $table->string('tratamiento');
            $table->integer('cargos');
            $table->integer('abonos');
            $table->integer('saldos');
            $table->timestamps();

            $table->foreign('paciente_id')
            ->references('id')->on('pacientes')
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
        Schema::dropIfExists('cuentas');
    }
}
