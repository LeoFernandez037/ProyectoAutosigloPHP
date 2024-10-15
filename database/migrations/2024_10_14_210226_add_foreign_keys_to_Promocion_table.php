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
        Schema::table('Promocion', function (Blueprint $table) {
            $table->foreign(['ID_VENTA'], 'R_77')->references(['ID_VENTA'])->on('Venta')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_DESCUENTO'], 'R_79')->references(['ID_SUB_INVENTARIO'])->on('Sub_Parametricas_Inventario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Promocion', function (Blueprint $table) {
            $table->dropForeign('R_77');
            $table->dropForeign('R_79');
        });
    }
};
