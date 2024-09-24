<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BitacorasAprendices extends Model
{
    use HasFactory;
   
    protected $fillable = ['nombre','planeaciones_id', 'bitacora','numero_bitacoras_id'];

    public function Planear(): BelongsTo
    {
        return $this->belongsTo(Planeaciones::class, 'planeaciones_id');
    }

    public function NumeroBitacora(): BelongsTo
    {
        return $this->belongsTo(NumeroBitacoras::class, 'numero_bitacoras_id');
    }

   

}
