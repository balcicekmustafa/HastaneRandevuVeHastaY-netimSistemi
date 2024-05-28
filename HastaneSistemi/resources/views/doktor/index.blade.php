<!DOCTYPE html>
<html>
<head>
    <title>Doktorlar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Doktorlar</h1>
<a href="{{ route('doktorlar.create') }}">Yeni Doktor Ekle</a>
<ul>
    @foreach ($doktorlar as $doktor)
        <li>{{ $doktor->ad }}</li>
    @endforeach
</ul>
</body>
</html>
