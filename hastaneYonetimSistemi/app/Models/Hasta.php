<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hasta extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'tc_no', 'ad_soyad', 'email', 'telefon', 'adres', 'sifre'
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
    public function show($id)
    {
        $hasta = Hasta::find($id);

        if ($hasta === null) {
            return redirect()->back()->with('error', 'Hasta bulunamadı.');
        }

        // Hasta bulundu, işlemlere devam edilebilir
        return view('hasta.show', compact('hasta'));
        $hasta = Hasta::where('tc_no', $request->input('tc_no'))->first();

        if ($hasta === null) {
            return redirect()->back()->with('error', 'Hasta bulunamadı.');
        }
        $appointment = Appointment::with('hasta')->find($id);

        if ($appointment === null || $appointment->hasta === null) {
            return redirect()->back()->with('error', 'Randevu veya Hasta bulunamadı.');
        }

    }

}
