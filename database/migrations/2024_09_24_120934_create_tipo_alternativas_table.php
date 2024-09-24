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
        Schema::create('tipo_alternativas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        
        DB::table('tipo_alternativa')->insert([
            [
                'id' => TipoAlternativa::DEFAULT_TIPO_ALTERNATIVA_ID_1,
                'nombre' => 'CONTRATO DE APRENDIZAJE',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => TipoAlternativa::DEFAULT_TIPO_ALTERNATIVA_ID_2,
                'nombre' => 'PASANTIA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => TipoAlternativa::DEFAULT_TIPO_ALTERNATIVA_ID_3,
                'nombre' => 'VINCULO LABORAL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => TipoAlternativa::DEFAULT_TIPO_ALTERNATIVA_ID_4,
                'nombre' => 'PROYECTO PRODUCTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_alternativas');
    }
};
