<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasta extends Model
{
    use HasFactory;

    protected $fillable = [
        'ad', 'email', 'sifre', 'telefon', 'adres'
    ];

    public function randevular()
    {
        return $this->hasMany(Randevu::class);
    }

    public function receteler()
    {
        return $this->hasMany(Recete::class);
    }

    public function radyolojiRaporlar()
    {
        return $this->hasMany(RadyolojiRapor::class);
    }
}
