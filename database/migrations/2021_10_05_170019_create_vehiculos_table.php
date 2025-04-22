<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id_vehiculo');
            $table->string('nombre_vehiculo');
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->dateTime('vigencia_soat');
            $table->dateTime('vigencia_tecnomecanica');
            $table->string('precio_alquiler');
            $table->string('precio_lavado');
            $table->boolean('disponibilidad');
            $table->string('foto_vehiculo');
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
        Schema::dropIfExists('vehiculos');
    }
}
