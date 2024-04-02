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
        Schema::create('libros', function (Blueprint $table){
            $table -> id();
            $table -> string('nombre');
            $table -> string('autor');
            $table -> string('edicion');
            $table -> string('editorial');
            $table -> integer('paginas');
        });
    }

    public function down(): void
    {
        //
    }
};
