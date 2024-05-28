<?php

namespace App\Http\Controllers;

use App\Models\Recete;
use App\Models\Hasta;
use App\Models\Doktor;
use Illuminate\Http\Request;

class ReceteController extends Controller
{
    public function index()
    {
        $receteler = Recete::all();
        return view('recete.index', compact('receteler'));
    }

    public function create()
    {
        $hastalar = Hasta::all();
        $doktorlar = Doktor::all();
        return view('recete.create', compact('hastalar', 'doktorlar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hasta_id' => 'required|exists:hastalar,id',
            'doktor_id' => 'required|exists:doktorlar,id',
            'recete' => 'required',
        ]);

        Recete::create([
            'hasta_id' => $request->hasta_id,
            'doktor_id' => $request->doktor_id,
            'recete' => $request->icerik,
        ]);

        return redirect()->route('receteler.index')->with('success', 'Reçete başarıyla oluşturuldu.');
    }
}
