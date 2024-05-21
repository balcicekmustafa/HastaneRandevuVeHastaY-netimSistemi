<!-- resources/views/hasta/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Hasta Kaydı</title>
</head>
<body>
<h1>Hasta Kaydı</h1>
<form action="{{ route('hasta.store') }}" method="POST">
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

    <label for="adres">Adres:</label>
    <textarea id="adres" name="adres"></textarea><br><br>

    <button type="submit">Kaydet</button>
</form>
</body>
</html>
