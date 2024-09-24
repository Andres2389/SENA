<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    public const DEFAULT_NIVEL_ID_1 = 1;
    public const DEFAULT_NIVEL_ID_2 = 2;
    public const DEFAULT_NIVEL_ID_3 = 3;
    public const DEFAULT_NIVEL_ID_4 = 4;

    protected $fillable = ['nombre'];

    public function fichas(): HasMany
    {
        return $this->hasMany(Fichas::class, 'nivels_id');
    }
}
