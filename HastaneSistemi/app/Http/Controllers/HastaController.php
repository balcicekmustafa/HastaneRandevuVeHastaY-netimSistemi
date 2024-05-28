<?php

namespace App\Http\Controllers;

use App\Models\Hasta;
use Illuminate\Http\Request;

class HastaController extends Controller
{
    public function index()
    {
        $hastalar = Hasta::all();
        return view('hasta.index', compact('hastalar'));
    }

    public function create()
    {
        return view('hasta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ad' => 'required',
            'email' => 'required|email',
            'sifre' => 'required',
            'telefon' => 'nullable',
            'adres' => 'nullable',
        ]);

        Hasta::create($request->all());

        return redirect()->route('hastalar.index');
    }
}
