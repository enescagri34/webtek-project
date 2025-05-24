<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adsoyad = htmlspecialchars(trim($_POST['adsoyad'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $konu = htmlspecialchars(trim($_POST['konu'] ?? ''));
    $mesaj = htmlspecialchars(trim($_POST['mesaj'] ?? ''));

    if ($adsoyad && $email && $konu && $mesaj) {
        echo "<h2 style='color: #00ff88;'>Gönderilen Bilgiler:</h2>";
        echo "<ul style='font-size: 1.1rem;'>";
        echo "<li><strong>Ad Soyad:</strong> $adsoyad</li>";
        echo "<li><strong>E-posta:</strong> $email</li>";
        echo "<li><strong>Konu:</strong> $konu</li>";
        echo "<li><strong>Mesaj:</strong> $mesaj</li>";
        echo "</ul>";
        echo "<a href='iletisim.html' style='color: #00ff88;'>Geri Dön</a>";

        // Mail gönderme işlemi
        $to = "enescagricaliskan34@gmail.com"; // <-- BURAYI KENDİ E-POSTA ADRESİNLE DEĞİŞTİR
        $subject = "Web Sitesi İletişim Formu - $konu";
        $body = "Ad Soyad: $adsoyad\nE-posta: $email\nKonu: $konu\nMesaj: $mesaj";
        $headers = "From: $email";

        // mail gönder
        if (mail($to, $subject, $body, $headers)) {
            echo "<p style='color: #00ff88;'>Mesaj başarıyla gönderildi.</p>";
        } else {
            echo "<p style='color: red;'>Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.</p>";
        }

    } else {
        echo "<p style='color: red;'>Lütfen tüm alanları doldurunuz.</p>";
        echo "<a href='iletisim.html'>Geri Dön</a>";
    }
} else {
    echo "<p style='color: red;'>Form doğru şekilde gönderilmedi.</p>";
    echo "<a href='iletisim.html'>Geri Dön</a>";
}
?>
