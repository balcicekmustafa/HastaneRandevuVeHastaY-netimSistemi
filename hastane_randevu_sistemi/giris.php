<?php
session_start();
include 'hasta_kayit.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kimlik_no = $_POST['kimlik_no'];
    $sifre = $_POST['sifre'];

    $sorgu = "SELECT * FROM Hasta WHERE KimlikNo='$kimlik_no' AND Sifre='$sifre'";
    $sonuc = $baglanti->query($sorgu);

    if ($sonuc->num_rows == 1) {
        $_SESSION['kimlik_no'] = $kimlik_no;
        header("Location: hasta_paneli.php");
    } else {
        echo "Hatalı kimlik numarası veya şifre!";
    }
}

$servername = "localhost";
$username = "root";
$password = "ayse+481";
$database = "hastaneyonetimsisvt";

// Veritabanı bağlantısını oluştur
$baglanti = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
} else {
    echo "Veritabanına başarıyla bağlandı";
}

