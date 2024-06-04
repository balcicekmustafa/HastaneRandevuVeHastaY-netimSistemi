<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doktor Kaydı</title>
</head>
<body>
<h1>Doktor Kaydı</h1>
<form action="{{ route('doktor.store') }}" method="POST">
    @csrf
    <label for="ad">Ad:</label>
    <input type="text" name="ad" id="ad" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <label for="sifre">Şifre:</label>
    <input type="password" name="sifre" id="sifre" required>
    <label for="sifre_confirmation">Şifre Tekrarı:</label>
    <input type="password" name="sifre_confirmation" id="sifre_confirmation" required>
    <label for="telefon">Telefon:</label>
    <input type="text" name="telefon" id="telefon">
    <label for="uzmanlik">Uzmanlık:</label>
    <input type="text" name="uzmanlik" id="uzmanlik">
    <button type="submit">Kaydet</button>
</form>
</body>
</html>
