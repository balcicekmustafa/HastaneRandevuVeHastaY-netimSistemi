<!DOCTYPE html>
<html>
<head>
    <title>Reçeteler</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Reçeteler</h1>
<a href="{{ route('receteler.create') }}">Yeni Reçete Ekle</a>
<ul>
    @foreach ($receteler as $recete)
        <li>{{ $recete->icerik }}</li>
    @endforeach
</ul>
</body>
</html>

