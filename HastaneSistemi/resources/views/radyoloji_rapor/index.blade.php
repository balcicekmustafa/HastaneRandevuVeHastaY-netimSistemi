<!DOCTYPE html>
<html>
<head>
    <title>Radyoloji Raporları</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Radyoloji Raporları</h1>
<a href="{{ route('radyoloji_raporlar.create') }}">Yeni Radyoloji Raporu Ekle</a>
<ul>
    @foreach ($raporlar as $rapor)
        <li>{{ $rapor->icerik }}</li>
    @endforeach
</ul>
</body>
</html>
