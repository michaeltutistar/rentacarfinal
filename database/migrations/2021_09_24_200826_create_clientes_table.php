<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('conductor_adicional');
            $table->string('documento_conductor_adicional');
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
        Schema::dropIfExists('clientes');
    }
}
