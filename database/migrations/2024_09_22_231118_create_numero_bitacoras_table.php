<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\NumeroBitacoras;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('numero_bitacoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('numero_bitacoras')->insert([
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_1,
                'nombre' => 'BITACORA 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_2,
                'nombre' => 'BITACORA 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_3,
                'nombre' => 'BITACORA 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_4,
                'nombre' => 'BITACORA 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_5,
                'nombre' => 'BITACORA 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_6,
                'nombre' => 'BITACORA 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_7,
                'nombre' => 'BITACORA 7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_8,
                'nombre' => 'BITACORA 8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_9,
                'nombre' => 'BITACORA 9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_10,
                'nombre' => 'BITACORA 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_11,
                'nombre' => 'BITACORA 11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => NumeroBitacoras::DEFAULT_NUMERO_BITACORA_ID_12,
                'nombre' => 'BITACORA 12',
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
        Schema::dropIfExists('numero_bitacoras');
    }
};
