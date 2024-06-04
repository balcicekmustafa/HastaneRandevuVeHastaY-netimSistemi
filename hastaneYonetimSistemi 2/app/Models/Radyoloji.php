<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radyoloji extends Model
{
    use HasFactory;

    protected $fillable = [
        'hasta_id', 'doktor_id', 'rapor',
    ];

    public function hasta()
    {
        return $this->belongsTo(Hasta::class);
    }

    public function doktor()
    {
        return $this->belongsTo(Doktor::class);
    }
}

