<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasta Kayıt</title>
</head>
<body>
<h1>Hasta Kayıt</h1>
<form action="{{ route('hasta.store') }}" method="POST">
    @csrf
    <label for="tc_no">TC Kimlik No:</label>
    <input type="text" name="tc_no" id="tc_no" required>
    <label for="ad_soyad">Adı Soyadı:</label>
    <input type="text" name="ad_soyad" id="ad_soyad" required>
    <label for="email">E-posta:</label>
    <input type="email" name="email" id="email" required>
    <label for="telefon">Telefon No:</label>
    <input type="text" name="telefon" id="telefon">
    <label for="adres">Adres:</label>
    <textarea name="adres" id="adres" required></textarea>
    <label for="sifre">Şifre:</label>
    <input type="password" name="sifre" id="sifre" required>
    <button type="submit">Kaydet</button>
</form>
</body>
</html>
