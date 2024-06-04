<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasta Girişi</title>
</head>
<body>
<h1>Hasta Girişi</h1>
<form action="{{ route('hasta.login.post') }}" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <label for="sifre">Şifre:</label>
    <input type="password" name="sifre" id="sifre" required>
    <button type="submit">Giriş Yap</button>
</form>
</body>
</html>
