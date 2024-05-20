<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function index()
    {
        $randevular = Randevu::where('doktor_id', auth()->id())->get();
        return view('doktor.dashboard', compact('randevular'));
    }

    public function raporEkle($hastaId)
    {
        return view('doktor.rapor_ekle', compact('hastaId'));
    }

    public function raporKaydet(Request $request, $hastaId)
    {
        $request->validate([
            'rapor' => 'required'
        ]);

        Rapor::create([
            'hasta_id' => $hastaId,
            'doktor_id' => auth()->id(),
            'rapor' => $request->rapor
        ]);

        return redirect()->route('doktor.dashboard')->with('success', 'Rapor başarıyla eklendi.');
    }

    public function receteEkle($hastaId)
    {
        return view('doktor.recete_ekle', compact('hastaId'));
    }

    public function receteKaydet(Request $request, $hastaId)
    {
        $request->validate([
            'recete' => 'required'
        ]);

        Recete::create([
            'hasta_id' => $hastaId,
            'doktor_id' => auth()->id(),
            'recete' => $request->recete
        ]);

        return redirect()->route('doktor.dashboard')->with('success', 'Reçete başarıyla eklendi.');
    }
}
