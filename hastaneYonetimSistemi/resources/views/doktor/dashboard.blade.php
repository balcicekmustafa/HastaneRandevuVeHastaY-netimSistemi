@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Randevularınız</h2>
                <ul>
                    @foreach($randevular as $randevu)
                        <li>{{ $randevu->randevu_tarihi }} - {{ $randevu->hasta->ad }} - {{ $randevu->durum }}
                            <a href="{{ route('doktor.raporEkle', $randevu->hasta_id) }}">Rapor Ekle</a>
                            <a href="{{ route('doktor.receteEkle', $randevu->hasta_id) }}">Reçete Ekle</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
