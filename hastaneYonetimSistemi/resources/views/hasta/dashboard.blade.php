@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Randevularınız</h2>
                <ul>
                    @foreach($randevular as $randevu)
                        <li>{{ $randevu->randevu_tarihi }} - {{ $randevu->doktor->ad }} - {{ $randevu->durum }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Raporlarınız</h2>
                <ul>
                    @foreach($raporlar as $rapor)
                        <li>{{ $rapor->olusturulma_tarihi }} - {{ $rapor->rapor }}</li>
                    @endforeach
                </ul>
                <h2>Reçeteleriniz</h2>
                <ul>
                    @foreach($receteler as $recete)
                        <li>{{ $recete->olusturulma_tarihi }} - {{ $recete->recete }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
