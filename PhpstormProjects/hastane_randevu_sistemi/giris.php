<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "ayse+481";
$database = "hastaneyonetimsisvt";

// Veritabanı bağlantısını oluştur
$baglanti = mysqli_connect("localhost", "root", "ayse+481", "hastaneyonetimsisvt");

if(!$baglanti){
    die ("connection failed:" .mysqli_connect_error());
}
else{
    echo "Bağlantı başarılı";
}


if (isset($_POST["Kayıt Ol"])) {
    $sql = " insert into doktor (DoktorID,D_KimlikNo,D_Adi,D_Soyadi,D_Sifre,D_Email,UzmanlikAlani,D_TelefonNumarasi) values ('" . $_POST["DoktorID,D_KimlikNo,D_Adi,D_Soyadi,D_Sifre,D_Email,UzmanlikAlani,D_TelefonNumarasi"] . "')";
    $sonuc = mysqli_query($baglanti, $sql);
    if ($sonuc) {
        echo "verimiz eklendi";
    } else {
        echo "hata olustu ekleme olmadı";
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $H_KimlikNo = $_POST['H_KimlikNo'];
        $H_Sifre = $_POST['H_Sifre'];

        $sorgu = "INSERT INTO hasta (H_KimlikNo,H_Sifre) VALUES ('$H_KimlikNo' , '$H_Sifre')";
        if ($baglanti->query($sorgu) === TRUE) {
            echo "Kayıt başarıyla eklendi..";
        } else {
            echo "Hata: " . $baglanti->error;
            exit;
        }
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        header("Location: giris_ekrani.html");
        exit;

    }
}


