<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doktor Dashboard</title>
</head>
<body>
<h1>Doktor Dashboard</h1>
<h2>Randevular</h2>
<ul>
    @foreach($randevular as $randevu)
        <li>{{ $randevu->randevu_tarihi }} - Hasta: {{ $randevu->hasta->ad }}</li>
    @endforeach
</ul>

<h2>Reçeteler</h2>
<ul>
    @foreach($receteler as $recete)
        <li>{{ $recete->icerik }} - Hasta: {{ $recete->hasta->ad }}</li>
    @endforeach
</ul>

<h2>Radyoloji Raporları</h2>
<ul>
    @foreach($radyolojiRaporlar as $rapor)
        <li>{{ $rapor->rapor }} - Hasta: {{ $rapor->hasta->ad }}</li>
    @endforeach
</ul>

<form action="{{ route('doktor.logout') }}" method="POST">
    @csrf
    <button type="submit">Çıkış Yap</button>
</form>
</body>
</html>
