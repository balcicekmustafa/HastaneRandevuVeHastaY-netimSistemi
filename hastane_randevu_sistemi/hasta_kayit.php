<?php
$servername = "localhost";
$username = "root";
$password = "ayse+481";
$database = "hastaneyonetimsisvt";

// Veritabanı bağlantısını oluşturduk
$baglanti = new mysqli($servername, $username, $password, $database);

// Bağlantı kontrolü yaptık
if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
} else {
    echo "Veritabanına başarıyla bağlandı";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $tc = $_POST['tc'];
    $sifre = $_POST['sifre'];

    // Burada sadece form verilerini yazdırıyoruz
    echo "<h3>Hasta Kayıt Bilgileri:</h3>";
    echo "Ad: $ad <br>";
    echo "Soyad: $soyad <br>";
    echo "TC Kimlik Numarası: $tc <br>";
    // Şifre güvenlik nedeniyle yazdırılmaz
}


