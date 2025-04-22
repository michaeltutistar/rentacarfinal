<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('vehiculo_id');
            $table->foreign("vehiculo_id")->references('id_vehiculo')->on('vehiculos')->onDelete('cascade');
           
            $table->boolean('documento_dia');
            $table->boolean('Luces_exteriores');
            $table->boolean('Luz_interior');
            $table->boolean('Limpia_brisas');
            $table->boolean('Pito');
            $table->boolean('Espejos_externos_internos');
            $table->boolean('Radio');
            $table->boolean('Llanta_repuesto');
            $table->boolean('Gato');
            $table->boolean('Cruceta');
            $table->boolean('Equipo_carretera');
            $table->boolean('Emblemas');
            $table->boolean('Antena');
            $table->boolean('Copas');
            $table->boolean('mantenimiento');
            $table->boolean('lavado');

            $table->string('Foto_izq');
            $table->string('Foto_der');
            $table->string('Foto_frente');
            $table->string('Foto_trasera');
            $table->integer('kilometraje');
            $table->string('observaciones');
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
        Schema::dropIfExists('estado_vehiculos');
    }
}
