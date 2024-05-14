<?php
$servername = "localhost:3306";
$username = "root";
$password = "ayse+481";
$database = "hastaneyonetimsisvt";

// Veritabanı bağlantısını oluşturduk
$baglanti = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol ettik
if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
} else {
    echo "Veritabanına başarıyla bağlandı";
}
include 'hasta_kayit.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kimlik_no = $_POST['kimlik_no'];
    $sifre = $_POST['sifre'];
    $adi = $_POST['adi'];
    $soyadi = $_POST['soyadi'];
    $dogum_tarihi = $_POST['dogum_tarihi'];
    // Diğer bilgileri buraya ekleyebilirsiniz

    $sorgu = "INSERT INTO Hasta (KimlikNo, Sifre, Adi, Soyadi, DogumTarihi) VALUES ('$kimlik_no', '$sifre', '$adi', '$soyadi', '$dogum_tarihi')";
    if ($baglanti->query($sorgu) === TRUE) {
        echo "Hesap başarıyla oluşturuldu";
    } else {
        echo "Hata: " . $sorgu . "<br>" . $baglanti->error;
    }
}

