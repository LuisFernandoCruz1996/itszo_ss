<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->enum('sexo', ['Masculino','Femenino']);
            $table->integer('telefono');
            $table->string('domicilio');
            $table->enum('carrera', ['IGE','II','ISC','LA','TSM','IEIS','IGES']);
            $table->string('periodo');
            $table->enum('semestre',['5','6','7','8','9','10','11']);
            $table->string('correo');
            $table->string('contraseña');
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
        Schema::dropIfExists('ss_alumnos');
    }
}
