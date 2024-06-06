<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doktor Kaydı</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            height: 100vh;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            background: white;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        form label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }
        form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        form button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
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
