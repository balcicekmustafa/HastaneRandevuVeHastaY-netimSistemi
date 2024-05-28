<!DOCTYPE html>
<html>
<head>
    <title>Randevular</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Randevular</h1>
<a href="{{ route('randevular.create') }}">Yeni Randevu Ekle</a>
<ul>
    @foreach ($randevular as $randevu)
        <li>{{ $randevu->tarih }} - {{ $randevu->saat }}</li>
    @endforeach
</ul>
</body>
</html>
