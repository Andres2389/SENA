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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_ficha')->nullable();  // nullable pero debes verificar que tenga datos antes de guardar
            $table->string('nombre')->nullable();  // nullable pero debes verificar que tenga datos antes de guardar
            $table->foreignId('nivels_id')
                ->nullable()
                ->constrained('nivels')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->string('fecha_inicio')->nullable(); // Lo marcamos como nullable si no siempre se va a pasar el dato
            $table->string('fecha_final')->nullable();    // Igual para fecha_fin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
