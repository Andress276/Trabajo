<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('soldados', function (Blueprint $table) {
            $table->id();
            $table->string('Cod_s');
            $table->string('Nom_s');
            $table->string('Apell_s'); // Agregar la columna Apell_s
            $table->string('Grado_s'); // Agregar la columna Grado_s
            $table->string('Cod_ce1'); // Agregar la columna Cod_ce1
            $table->integer('Num_com1'); // Agregar la columna Num_com1
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldados');
    }
};
