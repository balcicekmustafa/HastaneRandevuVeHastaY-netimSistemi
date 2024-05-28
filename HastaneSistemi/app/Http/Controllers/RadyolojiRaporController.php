<?php

namespace App\Http\Controllers;

use App\Models\RadyolojiRapor;
use App\Models\Hasta;
use App\Models\Doktor;
use Illuminate\Http\Request;

class RadyolojiRaporController extends Controller
{
    public function index()
    {
        $raporlar = RadyolojiRapor::all();
        return view('radyoloji_rapor.index', compact('raporlar'));
    }

    public function create()
    {
        $hastalar = Hasta::all();
        $doktorlar = Doktor::all();
        return view('radyoloji_rapor.create', compact('hastalar', 'doktorlar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hasta_id' => 'required|exists:hastalar,id',
            'doktor_id' => 'required|exists:doktorlar,id',
            'rapor' => 'required',
        ]);

        RadyolojiRapor::create([
            'hasta_id' => $request->hasta_id,
            'doktor_id' => $request->doktor_id,
            'rapor' => $request->icerik,
        ]);

        return redirect()->route('radyoloji_raporlar.index')->with('success', 'Radyoloji raporu başarıyla oluşturuldu.');
    }
}
