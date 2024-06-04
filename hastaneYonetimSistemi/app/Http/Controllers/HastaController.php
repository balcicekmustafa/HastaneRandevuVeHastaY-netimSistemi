<?php
namespace App\Http\Controllers;

use App\Models\Hasta;
use App\Models\Randevu;
use App\Models\Recete;
use App\Models\Radyoloji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HastaController extends Controller
{
    public function create()
    {
        return view('hasta.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tc_no' => 'required|unique:hastas|max:11',
            'ad_soyad' => 'required',
            'email' => 'required|email|unique:hastas',
            'telefon' => 'nullable',
            'adres' => 'required',
            'sifre' => 'required',
        ]);

        Hasta::create($validatedData);

        return redirect()->back()->with('success', 'Kayıt başarılı!');
    }
    public function showLoginForm()
    {
        return view('hasta.login');
    }
    public function loginForm()
    {
        return view('hasta.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'hasta_tc_no' => 'required',
            'hasta_sifre' => 'required',
        ]);

        $hasta = Hasta::where('tc_no', $request->input('hasta_tc_no'))->first();

        if ($hasta === null || !Hash::check($request->input('hasta_sifre'), $hasta->sifre)) {
            return redirect()->back()->with('error', 'Geçersiz TC Kimlik No veya Şifre.');
        }

        // Giriş başarılı, kullanıcıyı yönlendir
        return redirect()->route('hasta.dashboard')->with('success', 'Giriş başarılı!');



    }

    public function logout(Request $request)
    {
        Auth::guard('hasta')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('hasta.login');
    }

    public function dashboard()
    {
        $randevular = Randevu::where('hasta_id', Auth::id())->get();
        $receteler = Recete::where('hasta_id', Auth::id())->get();
        $radyolojiRaporlar = Radyoloji::where('hasta_id', Auth::id())->get();

        return view('hasta.dashboard', compact('randevular', 'receteler', 'radyolojiRaporlar'));
        return redirect()->back()->with('success', 'Giriş başarılı!');
    }
}
