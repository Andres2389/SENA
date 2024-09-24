<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planeaciones extends Model
{
    use HasFactory;

    
    public const DEFAULT_PlANEAR_ID_1 = 1;
    public const DEFAULT_PlANEAR_ID_2 = 2;
    public const DEFAULT_PlANEAR_ID_3 = 3; 

    protected $fillable = ['nombre','archivo'];

    public function Bitacoras(): HasMany
    {
        return $this->hasMany(Bitacoras::class, 'bitacoras_id');
    }
}
