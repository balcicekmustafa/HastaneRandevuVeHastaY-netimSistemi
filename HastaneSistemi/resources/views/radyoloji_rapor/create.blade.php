<!DOCTYPE html>
<html>
<head>
    <title>Yeni Radyoloji Raporu Ekle</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Yeni Radyoloji Raporu Ekle</h1>
<form action="{{ route('radyoloji_raporlar.store') }}" method="POST">
    @csrf
    <label for="hasta_id">Hasta:</label>
    <select id="hasta_id" name="hasta_id">
        @foreach ($hastalar as $hasta)
            <option value="{{ $hasta->id }}">{{ $hasta->ad }}</option>
        @endforeach
    </select><br><br>
    <label for="doktor_id">Doktor:</label>
    <select id="doktor_id" name="doktor_id">
        @foreach ($doktorlar as $doktor)
            <option value="{{ $doktor->id }}">{{ $doktor->ad }}</option>
        @endforeach
    </select><br><br>
    <label for="icerik">İçerik:</label>
    <textarea id="icerik" name="icerik" required></textarea><br><br>
    <button type="submit">Kaydet</button>
</form>
</body>
</html>
