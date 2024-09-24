<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Planeaciones;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('planeaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('archivo')->nullable();
            $table->timestamps();
        });

        DB::table('planeaciones')->insert([
            [
                'id' => Planeaciones::DEFAULT_PlANEAR_ID_1,
                'nombre' => 'MOMENTO1',
                'archivo'=> '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Planeaciones::DEFAULT_PlANEAR_ID_2,
                'nombre' => 'MOMENTO2',
                'archivo'=> '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Planeaciones::DEFAULT_PlANEAR_ID_3,
                'nombre' => 'MOMENTO3',
                'archivo'=> '',
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
        Schema::dropIfExists('planeaciones');
    }
};
