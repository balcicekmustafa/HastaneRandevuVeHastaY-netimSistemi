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
}
