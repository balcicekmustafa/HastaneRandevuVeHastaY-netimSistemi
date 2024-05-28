<?php

namespace App\Http\Controllers;

use App\Models\Doktor;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function index()
    {
        $doktorlar = Doktor::all();
        return view('doktor.index', compact('doktorlar'));
    }

    public function create()
    {
        return view('doktor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ad' => 'required',
            'email' => 'required|email',
            'sifre' => 'required',
            'telefon' => 'nullable',
            'uzmanlik' => 'nullable',
        ]);

        Doktor::create($request->all());

        return redirect()->route('doktorlar.index');
    }
}
