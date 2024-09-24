<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumeroBitacoras extends Model
{
    use HasFactory;

    public const DEFAULT_NUMERO_BITACORA_ID_1 = 1;
    public const DEFAULT_NUMERO_BITACORA_ID_2 = 2;
    public const DEFAULT_NUMERO_BITACORA_ID_3 = 3;
    public const DEFAULT_NUMERO_BITACORA_ID_4 = 4;
    public const DEFAULT_NUMERO_BITACORA_ID_5 = 5;
    public const DEFAULT_NUMERO_BITACORA_ID_6 = 6;
    public const DEFAULT_NUMERO_BITACORA_ID_7 = 7;
    public const DEFAULT_NUMERO_BITACORA_ID_8 = 8;
    public const DEFAULT_NUMERO_BITACORA_ID_9 = 9;
    public const DEFAULT_NUMERO_BITACORA_ID_10 = 10;
    public const DEFAULT_NUMERO_BITACORA_ID_11 = 11;
    public const DEFAULT_NUMERO_BITACORA_ID_12 = 12;

    
    protected $fillable = ['nombre','bitacoras_id'];



    public function bitacoras(): HasMany
    {
        return $this->hasMany(BitacorasAprendices::class, 'bitacoras_id');
    }
}
