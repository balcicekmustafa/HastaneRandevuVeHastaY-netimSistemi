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
    echo "";
}
session_start();
include 'hasta_kayit.php';


