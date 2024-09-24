<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Nivel;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nivels', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->timestamps();
        });
        DB::table('nivels')->insert([
            [
                'id' => Nivel::DEFAULT_NIVEL_ID_1,
                'nombre' => 'OPERARIO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Nivel::DEFAULT_NIVEL_ID_2,
                'nombre' => 'TECNICO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Nivel::DEFAULT_NIVEL_ID_3,
                'nombre' => 'TECNOLOGO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Nivel::DEFAULT_NIVEL_ID_4,
                'nombre' => 'AUXILIAR',
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
        Schema::dropIfExists('nivels');
    }
};
