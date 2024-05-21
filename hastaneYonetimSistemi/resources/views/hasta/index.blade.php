<!-- resources/views/hasta/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Hasta Listesi</title>
</head>
<body>
<h1>Hasta Listesi</h1>
<a href="{{ route('hasta.create') }}">Yeni Hasta Ekle</a>
<ul>
    @foreach ($hastalar as $hasta)
        <li>{{ $hasta->ad }} - {{ $hasta->email }}</li>
    @endforeach
</ul>
</body>
</html>
