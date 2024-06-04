<?php

namespace App\Http\Controllers;

use App\Models\Doktor;
use App\Models\Randevu;
use App\Models\Recete;
use App\Models\Radyoloji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoktorController extends Controller
{
    public function create()
    {
        return view('doktor.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tc_no' => 'required|unique:doktors|max:11',
            'ad_soyad' => 'required',
            'uzmanlik' => 'required',
            'email' => 'required|email|unique:doktors',
            'sifre' => 'required',
        ]);

        Doktor::create($validatedData);

        return redirect()->back()->with('success', 'Kayıt başarılı!');
    }


    public function showLoginForm()
    {
        return view('doktor.login');
    }
    public function loginForm()
    {
        return view('doktor.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'doktor_tc_no' => 'required',
            'doktor_sifre' => 'required',
        ]);

        if (Auth::guard('doktor')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('doktor.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Sağlanan kimlik bilgileri kayıtlarımızla eşleşmiyor.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('doktor')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('doktor.login');
    }

    public function dashboard()
    {
        $randevular = Randevu::where('doktor_id', Auth::id())->get();
        $receteler = Recete::where('doktor_id', Auth::id())->get();
        $radyolojiRaporlar = Radyoloji::where('doktor_id', Auth::id())->get();

        return view('doktor.dashboard', compact('randevular', 'receteler', 'radyolojiRaporlar'));
        return redirect()->back()->with('success', 'Giriş başarılı!');
    }
}
