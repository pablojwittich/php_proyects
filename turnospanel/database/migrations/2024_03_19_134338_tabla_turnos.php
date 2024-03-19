<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('panel_turnos', function(Blueprint $table){
            $table->id();
            $table->string('qx');
            $table->string('estado');
            $table->date('inicio');
            $table->date('fin');
            $table->string('cirujano');
            $table->string('anestesista');
            $table->string('paciente');
            $table->string('practica');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
