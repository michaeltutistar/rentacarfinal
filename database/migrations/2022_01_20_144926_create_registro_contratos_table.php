<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_contratos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_de_reserva');
            $table->string('voucher');
            $table->dateTime('fecha_salida');
            $table->integer('km_salida');
            $table->string('km_permitido');
            $table->string('hora_salida');
            $table->string('combustible_salida');
            $table->string('destino');
            $table->string('inventario_salida');
            $table->string('entregado_por');
            $table->string('recibido_por');
            $table->string('observaciones_entregado')->nullable();
            $table->string('observaciones_recibido')->nullable();
            $table->string('estado_salida');
            $table->dateTime('fecha_entrada')->nullable();
            $table->string('hora_entrada')->nullable();
            $table->integer('km_entrada')->nullable();
            $table->integer('km_por_cobrar')->nullable();
            $table->string('combustible_entrada')->nullable();
            $table->integer('dias')->nullable();
            $table->string('inventario_entrada')->nullable();
            $table->string('entregado_por_entrada')->nullable();
            $table->string('recibido_por_entrada')->nullable();
            $table->string('observaciones_entregado_entrada')->nullable();
            $table->string('observaciones_recibido_entrada')->nullable();
            $table->string('estado_entrada')->nullable();
            $table->string('Estado_contrato');
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
        Schema::dropIfExists('registro_contratos');
    }
}
