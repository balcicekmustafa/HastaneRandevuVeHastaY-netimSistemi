<?php

namespace App\Http\Controllers;

use App\Models\Randevu;
use App\Models\Hasta;
use App\Models\Doktor;
use Illuminate\Http\Request;

class RandevuController extends Controller
{
    public function index()
    {
        $randevular = Randevu::all();
        return view('randevu.index', compact('randevular'));
    }

    public function create()
    {
        $hastalar = Hasta::all();
        $doktorlar = Doktor::all();
        return view('randevu.create', compact('hastalar', 'doktorlar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hasta_id' => 'required',
            'doktor_id' => 'required',
            'randevu_tarih' => 'required|date',
        ]);

        Randevu::create($request->all());

        return redirect()->route('randevular.index');
    }
}
