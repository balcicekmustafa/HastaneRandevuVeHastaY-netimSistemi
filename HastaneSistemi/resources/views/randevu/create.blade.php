<!DOCTYPE html>
<html>
<head>
    <title>Yeni Randevu Ekle</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Yeni Randevu Ekle</h1>
<form action="{{ route('randevular.store') }}" method="POST">
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
    <label for="tarih">Tarih:</label>
    <input type="date" id="tarih" name="tarih" required><br><br>
    <label for="saat">Saat:</label>
    <input type="time" id="saat" name="saat" required><br><br>
    <button type="submit">Kaydet</button>
</form>
</body>
</html>
