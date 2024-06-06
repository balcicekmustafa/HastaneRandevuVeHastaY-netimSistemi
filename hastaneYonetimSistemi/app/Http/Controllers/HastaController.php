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
            'telefon' => 'required',
            'adres' => 'required',
            'sifre' => 'required',
        ]);

        if ($validatedData){
            $hasta=new Hasta();
            $hasta->tc_no=$request->tc_no;
            $hasta->ad_soyad=$request->ad_soyad;
            $hasta->email=$request->email;
            $hasta->telefon=$request->telefon;
            $hasta->adres=$request->adres;
            $hasta->sifre=$request->sifre;
            $hasta->save();
            return redirect()->back()->with('status', 'Kayıt başarılı!');
        }
        return redirect()->back()->with('error', 'Kayıt başarısız!');
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
            'email' => 'required|email',
            'sifre' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->sifre,
        ];

        if (Auth::attempt($credentials)) {
            // Giriş başarılı
            return redirect()->route('hasta.dashboard');
        } else {
            // Giriş başarısız
            return redirect()->back()->with('status', 'Giriş başarısız. Lütfen bilgilerinizi kontrol edin.');
         }
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
