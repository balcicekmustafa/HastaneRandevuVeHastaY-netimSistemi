<!DOCTYPE html>
<html>
<head>
    <title>Hastalar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Hastalar</h1>
<a href="{{ route('hastalar.create') }}">Yeni Hasta Ekle</a>
<ul>
    @foreach ($hastalar as $hasta)
        <li>{{ $hasta->ad }}</li>
    @endforeach
</ul>
</body>
</html>
