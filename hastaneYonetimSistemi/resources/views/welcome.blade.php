<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASTANE RANDEVU SİSTEMİ</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            justify-content: center;
            background-color: #f0f0f0;
        }
        h1 {
            text-align: center;
            width: 100%;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        button {
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>HASTANE RANDEVU SİSTEMİ</h1>
<div class="button-container">
    <button onclick="window.location.href='{{ route('hasta.create') }}'">Hasta Kayıt</button>
    <button onclick="window.location.href='{{ route('hasta.login') }}'">Hasta Giriş</button>
    <button onclick="window.location.href='{{ route('doktor.create') }}'">Doktor Kayıt</button>
    <button onclick="window.location.href='{{ route('doktor.login') }}'">Doktor Giriş</button>
</div>
</body>
</html>
