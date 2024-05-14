<?php
$servername = "localhost";
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
session_start();
include 'doktor_kayit.php';



