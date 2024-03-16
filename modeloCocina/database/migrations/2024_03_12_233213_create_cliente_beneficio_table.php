<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteBeneficioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // primero creamos los campos y luego los referenciamos 
        Schema::create('cliente_beneficio', function (Blueprint $table) {
            $table->id();
            //Creo el campo cliente_id
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('beneficio_id');
            $table->timestamps();
            //Aca referencio el campo que que cree con la tabla cliente
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('beneficio_id')->references('id')->on('beneficios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_beneficio');
    }
}
