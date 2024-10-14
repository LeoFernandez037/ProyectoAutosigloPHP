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
        Schema::create('Capacidad_carga', function (Blueprint $table) {
            $table->integer('ID_CAPACIDAD');
            $table->string('DETALLE', 180)->nullable();
            $table->integer('ID_METRICAS')->nullable();

            $table->primary(['ID_CAPACIDAD'], 'xpkcapacidad_carga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Capacidad_carga');
    }
};
