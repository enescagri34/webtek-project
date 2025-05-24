<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!$fullname || !$email || !$username || !$password) {
        die('Tüm alanlar doldurulmalıdır.');
    }

    $userLine = "$username|$password|$fullname|$email" . PHP_EOL;
    $file = 'users.txt';

    // Aynı kullanıcı adı varsa reddet
    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            list($existingUser) = explode('|', $line);
            if ($existingUser === $username) {
                die('Bu kullanıcı adı zaten kayıtlı.');
            }
        }
    }

    file_put_contents($file, $userLine, FILE_APPEND);
    header('Location: login.html');
    exit;
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '<h2>Kayıt Formu doğrudan çalıştırılamaz. Lütfen kayıt sayfasından gönderin.</h2>';
} else {
    echo 'Geçersiz istek.';
}
?>

