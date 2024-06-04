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
        }
        .container {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
        .column {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            width: 100%;
        }
        .column h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }
        form label {
            margin-top: 10px;
        }
        form input, form textarea, form button {
            margin-top: 5px;
            padding: 10px;
        }
        form button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<h1>HASTANE RANDEVU SİSTEMİ</h1>
<div class="container">
    <div class="column">
        <h2>Hasta Kayıt Ekranı</h2>
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
        <h2>Hasta Giriş Sayfası</h2>
        <form action="{{ route('hasta.login') }}" method="POST">
            @csrf
            <label for="hasta_tc_no">Hasta TC Kimlik No:</label>
            <input type="text" name="hasta_tc_no" id="hasta_tc_no" required>
            <label for="hasta_sifre">Şifre:</label>
            <input type="password" name="hasta_sifre" id="hasta_sifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
    <div class="column">
        <h2>Doktor Kayıt Ekranı</h2>
        <form action="{{ route('doktor.store') }}" method="POST">
            @csrf
            <label for="tc_no">TC Kimlik No:</label>
            <input type="text" name="tc_no" id="tc_no" required>
            <label for="ad_soyad">Adı Soyadı:</label>
            <input type="text" name="ad_soyad" id="ad_soyad" required>
            <label for="uzmanlik">Uzmanlık Alanı:</label>
            <input type="text" name="uzmanlik" id="uzmanlik" required>
            <label for="email">E-posta:</label>
            <input type="email" name="email" id="email" required>
            <label for="sifre">Şifre:</label>
            <input type="password" name="sifre" id="sifre" required>
            <button type="submit">Kaydet</button>
        </form>
        <h2>Doktor Giriş Sayfası</h2>
        <form action="{{ route('doktor.login') }}" method="POST">
            @csrf
            <label for="doktor_tc_no">Doktor TC Kimlik No:</label>
            <input type="text" name="doktor_tc_no" id="doktor_tc_no" required>
            <label for="doktor_sifre">Şifre:</label>
            <input type="password" name="doktor_sifre" id="doktor_sifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</div>
</body>
</html>
