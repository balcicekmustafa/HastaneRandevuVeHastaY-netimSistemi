<?php
$servername = "localhost";
$username = "root";
$password = "ayse+481";
$database = "hastaneyonetimsisvt";

// Veritabanına bağlandık
$baglanti = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol ettik
if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

//include 'doktor_kayit.php';

// Veritabanından veri okuduk
$sorgu = "SELECT * FROM Hasta";
$sonuc = $baglanti->query($sorgu);

if ($sonuc->num_rows > 0) {
    // Her bir satır için veriyi yazdırdık
    while ($row = $sonuc->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Adi: " . $row["adi"] . " - Soyadi: " . $row["soyadi"] . "<br>";
    }
} else {
    echo "Veri bulunamadı";
}
$baglanti->close();


// Bağlantıyı kontrol et
if ($baglanti->connect_error)
    die("Bağlantı hatası: " . $baglanti->connect_error);
else echo "Veritabanına başarıyla bağlandı";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Form verilerini al
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $bolum = $_POST['bolum'];
    $sifre = $_POST['sifre'];


    // Veritabanına ekleme veya diğer işlemleri yapabilirsiniz
    // Burada sadece form verilerini yazdırıyoruz
    echo "<h3>Doktor Kayıt Bilgileri:</h3>";
    echo "Ad: $ad <br>";
    echo "Soyad: $soyad <br>";
    echo "Bölüm: $bolum <br>";

    // Şifreyi güvenlik nedeniyle yazdırmadık
}
