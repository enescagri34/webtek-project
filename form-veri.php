<?php
// Formdan gelen verileri güvenli bir şekilde al
$adsoyad  = htmlspecialchars($_POST["adsoyad"] ?? "");
$email    = htmlspecialchars($_POST["email"] ?? "");
$telefon  = htmlspecialchars($_POST["telefon"] ?? "");
$cinsiyet = htmlspecialchars($_POST["cinsiyet"] ?? "");
$sehir    = htmlspecialchars($_POST["sehir"] ?? "");
$konu     = htmlspecialchars($_POST["konu"] ?? "");
$mesaj    = nl2br(htmlspecialchars($_POST["mesaj"] ?? ""));

// Ekrana yazdır
echo "<h2>Form Sonuçları</h2>";
echo "Ad Soyad: $adsoyad<br>";
echo "E-posta: $email<br>";
echo "Telefon: $telefon<br>";
echo "Cinsiyet: $cinsiyet<br>";
echo "Şehir: $sehir<br>";
echo "Konu: $konu<br>";
echo "Mesaj:<br> $mesaj<br>";
?>
