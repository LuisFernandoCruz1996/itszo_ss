<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_programas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_control')->unsigned();
            $table->foreign('no_control')->references('id')->on('ss_alumnos');
            $table->string('dependencia_of');
            $table->string('titular_dep');
            $table->string('puesto_dep');
            $table->string('nombre_programa');
            $table->string('modalidad');
            $table->date('fecha_inicio');
            $table->date('fecha_terminacion');
            $table->string('programa_actividad');
            $table->enum('tip_pro',['EPA','AC','DS','DC','ACULT','AALS','AD','MA','Otro']);
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
        Schema::dropIfExists('ss_programas');
    }
}
