<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('date_libros', function(Blueprint $table){
            $table->id();
            $table->nombre();
            $table->autor();
            $table->editorial();
            $table->precio();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('date_libre');
    }
};
