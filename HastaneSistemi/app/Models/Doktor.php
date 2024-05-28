<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doktor extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['ad', 'email', 'sifre', 'telefon', 'uzmanlik'];

    protected $hidden = ['sifre'];
}
