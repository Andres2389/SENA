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
        Schema::create('bitacoras_aprendices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('numero_bitacoras_id')
            ->nullable()
            ->constrained('numero_bitacoras')
            ->nullOnDelete()
            ->cascadeOnUpdate();
            $table->string('bitacora')->nullable();
            $table->foreignId('planeaciones_id')
            ->nullable()
            ->constrained('planeaciones')
            ->nullOnDelete()
            ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoras_aprendices');
    }
};
