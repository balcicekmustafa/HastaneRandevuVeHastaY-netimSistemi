<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasta Dashboard</title>
</head>
<body>
<h1>Hasta Dashboard</h1>

<h2>Randevular</h2>
<ul>
    @if ($randevular->count() > 0)
        @foreach ($randevular as $randevu)
            <li>{{ $randevu->randevu_tarihi }} - Doktor: {{ $randevu->doktor->ad }}</li>
        @endforeach
    @else
        <p>Henüz herhangi bir randevunuz yok.</p>
    @endif
</ul>

<h2>Reçeteler</h2>
<ul>
    @if ($receteler->count() > 0)
        @foreach ($receteler as $recete)
            <li>{{ $recete->icerik }} - Doktor: {{ $recete->doktor->ad }}</li>
        @endforeach
    @else
        <p>Henüz herhangi bir reçete yok.</p>
    @endif
</ul>

<h2>Radyoloji Raporları</h2>
<ul>
    @if ($radyolojiRaporlar->count() > 0)
        @foreach ($radyolojiRaporlar as $rapor)
            <li>{{ $rapor->rapor }} - Doktor: {{ $rapor->doktor->ad }}</li>
        @endforeach
    @else
        <p>Henüz herhangi bir radyoloji raporu yok.</p>
    @endif
</ul>

<form action="{{ route('hasta.logout') }}" method="POST">
    @csrf
    <button type="submit">Çıkış Yap</button>
</form>
</body>
</html>
