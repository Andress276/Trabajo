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
        Schema::create('soldados_servios', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_s');

            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->unsignedBigInteger('soldado_id')->nullable();

            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('soldado_id')->references('id')->on('soldados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldados_servios');
    }
};
