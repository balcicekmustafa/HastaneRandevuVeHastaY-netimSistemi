<?php
//header("Location: giris_ekrani.html");
//exit;
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
else {
    echo " ";
}
//include 'doktor_kayit.php';

// Veritabanından veri okuduk
$sorgu = "SELECT * FROM doktor";
$sonuc = $baglanti->query($sorgu);


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Form verilerini al
    $D_KimlikNo = $_POST['D_KimlikNo'];
    $D_Adi = $_POST['D_Adi'];
    $D_Soyadi = $_POST['D_Soyadi'];
    $D_Sifre = $_POST['D_Sifre'];
    $D_Email = $_POST['D_Email'];
    $UzmanlikAlan = $_POST['UzmanlikAlani'];
    $D_TelefonNumarasi = $_POST['D_TelefonNumarasi'];

    // Veritabanına ekleme veya diğer işlemleri yapabilirsiniz
    // Burada sadece form verilerini yazdırıyoruz
    $sql = "INSERT INTO doktor (DoktorID,D_KimlikNo, D_Adi, D_Soyadi, D_Sifre, D_Email, UzmanlikAlan, D_TelefonNumarasi) VALUES ('$DoktorID','$D_KimlikNo', '$D_Adi', '$D_Soyadi', '$D_Sifre', '$D_Email','$UzmanlikAlan','$D_TelefonNumarasi')";


    if ($baglanti->query($sql) === TRUE) {
        echo "Doktor Kaydı başarılı!";
    } else {
        echo "Hata: " . $sql . "<br>" . $baglanti->error;
    }


    //echo "DoktorID: $DoktorID <br>";
    //echo "KimlikNo: $D_KimlikNo <br>";
    //echo "Ad: $D_Adi <br>";
    //echo "Soyad: $D_Soyadi <br>";
    //echo "Sifre: $D_Sifre <br>";
    //echo "Email: $D_Email <br>";
    //echo "Bölüm: $UzmanlikAlan<br>";
    //echo "TelNo: $D_TelefonNumarasi <br>";

    if ($baglanti->query($sql) === TRUE) {
        echo "Doktor başarıyla kaydedildi";
    } else {
        echo "Hata: " . $sql . "<br>" . $baglanti->error;
    }
    $baglanti->close();

    if ($sonuc->num_rows > 0) {
        // Her bir satır için veriyi yazdırdık
        while ($row = $sonuc->fetch_assoc()) {
            echo "DoktorID: " . $row["DoktoID"] . "D_KimlikNo: " . $row["D_KimlikNo"] . " - D_Adi: " . $row["D_Adi"] . " - D_Soyadi: " . $row["D_Soyadi"] . "D_Sifre: " . $row["D_Sifre"] . "D_Email: " . $row["D_Email"] . "UzmanlikAlani: " . $row["UzmanlikAlani"] . "D_TelefonNumarasi: " . $row["D_TelefonNumarasi"] ."<br>";
        }
    } else {
        echo "Veri bulunamadı";
    }

       // Şifreyi güvenlik nedeniyle yazdırmadık

}
// Burada sadece form verilerini yazdırıyoruz

// Şifre güvenlik nedeniyle yazdırılmaz

// Kayıt işlemi tamamlandıktan sonra



