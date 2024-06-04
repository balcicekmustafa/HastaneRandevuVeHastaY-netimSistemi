<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;

    protected $fillable = [
        'hasta_id', 'doktor_id', 'randevu_tarihi',
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
