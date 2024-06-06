<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doktor extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'tc_no', 'ad_soyad', 'uzmanlik', 'email', 'sifre'
    ];

    public function randevular()
    {
        return $this->hasMany(Randevu::class);
    }

    public function recetes()
    {
        return $this->hasMany(Recete::class);
    }

    public function radyolojis()
    {
        return $this->hasMany(Radyoloji::class);
    }
}
