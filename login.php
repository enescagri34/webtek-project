<?php
// Doğru kullanıcı bilgileri (örnek)
$dogru_kullanici = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

// POST ile gelen verileri al
$kullanici = $_POST["kullanici"] ?? "";
$sifre = $_POST["sifre"] ?? "";

// Kontrol işlemi
if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    $ogrenci_no = explode("@", $kullanici)[0];
    echo "<h2 style='text-align:center; margin-top: 50px;'>Hoş geldiniz <strong>$ogrenci_no</strong>!</h2>";
} else {
    // Hatalıysa login sayfasına geri yönlendir
    header("Location: login.html");
    exit();
}
?>
