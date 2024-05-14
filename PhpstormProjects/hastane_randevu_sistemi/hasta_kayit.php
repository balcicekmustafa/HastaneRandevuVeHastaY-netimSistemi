<?php
//header("Location: giris_ekrani.html");
//exit;
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
    echo " ";
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $H_KimlikNo = $_POST['H_KimlikNo'];
    $H_Adi = $_POST['H_Adi'];
    $H_Soyadi = $_POST['H_Soyadi'];
    $H_Sifre = $_POST['H_Sifre'];
    $DogumTarihi = $_POST['DogumTarihi'];
    $H_Cinsiyet = $_POST['H_Cinsiyet'];
    $H_TelefonNumarasi = $_POST['H_TelefonNumarasi'];
    $H_Email = $_POST['H_Email'];
    $H_Adres = $_POST['H_Adres'];

    $sorgu = "SELECT * FROM hasta";
    $sonuc = $baglanti->query($sorgu);
    if ($sonuc->num_rows == 1) {
        $_SESSION['H_KimlikNo'] = $H_KimlikNo;
        header("Location: hasta_paneli.php");
        exit; // Yönlendirme yapıldıktan sonra kodun devam etmemesi için
    } else {
        echo "Hatalı kimlik numarası veya şifre!";
    }

    $sql = "INSERT INTO hasta (HastaID, H_KimlikNo, H_Adi, H_Soyadi,H_Sifre, DogumTarihi,H_Cinsiyet,H_TelefonNumarasi,H_Email,H_Adres) VALUES ('$HastaID', '$H_KimlikNo', '$H_Adi', '$H_Soyadi', '$H_Sifre', '$DogumTarihi', '$H_Cinsiyet', '$H_TelefonNumarasi', '$H_Email', '$H_Adres')";




    //echo "<h3>Hasta Kayıt Bilgileri:</h3>";
    //echo "HastaID: $HastaID <br>";
    //echo "KimlikNo: $H_KimlikNo <br>";
    //echo "Ad: $H_Adi <br>";
    //echo "Soyad: $H_Soyadi <br>";
    //echo "Sifre: $H_Sifre <br>";
    //echo "Dogum Tarihi: $DogumTarihi <br>";
    //echo "Cinsiyet: $H_Cinsiyet <br>";
    //echo "TelefonNo: $H_TelefonNumarasi <br>";
    //echo "Email: $H_Email <br>";
    //echo "Adres: $H_Adres <br>";

    //if ($baglanti->query($sql) === TRUE) {
       // echo "Hasta başarıyla kaydedildi";
    //} else {
       // echo "Hata: " . $sql . "<br>" . $baglanti->error;
    //}
    //if ($sonuc->num_rows > 0) {
        // Her bir satır için veriyi yazdırdık
        //while ($row = $sonuc->fetch_assoc()) {
            //echo "ID: " . $row["DoktoID"] . "KimlikNo: " . $row["D_KimlikNo"] . " - Adi: " . $row["D_Adi"] . " - Soyadi: " . $row["D_Soyadi"] . "Sifre: " . $row["D_Sifre"] . "Email: " . $row["D_Email"] . "Uzmanlık Alan: " . $row["UzmanlikAlan"] . "TelNo: " . $row["D_TelefonNumarasi"] ."<br>";
        //}
    //} else {
       // echo "Veri bulunamadı";
   // }
    //$baglanti->close();

    // Şifreyi güvenlik nedeniyle yazdırmadık
}

    // Burada sadece form verilerini yazdırıyoruz
    echo "Hasta Kaydı Başarılı";
    // Şifre güvenlik nedeniyle yazdırılmaz

// Kayıt işlemi tamamlandıktan sonra






