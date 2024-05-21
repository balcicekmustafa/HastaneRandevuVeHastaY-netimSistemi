<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasta;

class HastaController extends Controller
{
    // Hasta kaydı oluşturma fonksiyonu
    public function create()
    {
        return view('hasta.create');
    }

    // Hasta kaydını veritabanına kaydetme fonksiyonu
    public function store(Request $request)
    {
        $request->validate([
            'ad' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:hastas',
            'sifre' => 'required|string|min:8|confirmed',
        ]);

        $hasta = new Hasta;
        $hasta->ad = $request->ad;
        $hasta->email = $request->email;
        $hasta->sifre = bcrypt($request->sifre);
        $hasta->telefon = $request->telefon;
        $hasta->adres = $request->adres;
        $hasta->save();

        return redirect()->route('hasta.index')->with('success', 'Hasta kaydı başarıyla oluşturuldu.');
    }

    // Hasta listesini gösterme fonksiyonu
    public function index()
    {
        $hastalar = Hasta::all();
        return view('hasta.index', compact('hastalar'));
    }
}
