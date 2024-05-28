<!DOCTYPE html>
<html>
<head>
    <title>Yeni Doktor Ekle</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Yeni Doktor Ekle</h1>
<form action="{{ route('doktorlar.store') }}" method="POST">
    @csrf
    <label for="ad">Ad:</label>
    <input type="text" id="ad" name="ad" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="sifre">Şifre:</label>
    <input type="password" id="sifre" name="sifre" required><br><br>
    <label for="sifre_confirmation">Şifre Tekrar:</label>
    <input type="password" id="sifre_confirmation" name="sifre_confirmation" required><br><br>
    <label for="telefon">Telefon:</label>
    <input type="text" id="telefon" name="telefon"><br><br>
    <label for="uzmanlik">Uzmanlık:</label>
    <input type="text" id="uzmanlik" name="uzmanlik"><br><br>
    <button type="submit">Kaydet</button>
</form>
</body>
</html>
