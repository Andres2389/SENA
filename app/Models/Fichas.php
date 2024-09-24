<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fichas extends Model
{
    use HasFactory;
   
    
    protected $fillable = ['numero_ficha', 'nivels_id', 'nombre'];
    protected $dates = ['fecha_inicio', 'fecha_final'];



    public function nivel(): BelongsTo
    {
        return $this->belongsTo(Nivel::class, 'nivels_id' );
    }

    
}
