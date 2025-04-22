<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->unsignedInteger('vehiculo_id');
            $table->foreign("vehiculo_id")->references('id_vehiculo')->on('vehiculos')->onDelete('cascade');
            $table->unsignedInteger('cliente_id');
            $table->foreign("cliente_id")->references('id_cliente')->on('clientes')->onDelete('cascade');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->integer('dias_reserva');
            $table->boolean('transporte');
            $table->integer('precio_transporte');
            $table->integer('personas');
            $table->string('lugar');
            $table->boolean('lavado');
            $table->integer('valor_reserva');
            $table->integer('saldo');
            $table->integer('descuento');
            $table->string('estado_reserva');
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
        Schema::dropIfExists('reservas');
    }
}
