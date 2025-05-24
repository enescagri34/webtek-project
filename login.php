<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $file = 'users.txt';
    $found = false;

    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            list($storedUser, $storedPass, $storedName) = explode('|', $line);
            if ($storedUser === $username && $storedPass === $password) {
                $_SESSION['username'] = $username;
                $_SESSION['fullname'] = $storedName;
                $found = true;
                break;
            }
        }
    }

    if ($found) {
        header('Location: index.html');
        exit;
    } else {
        echo '<h2>Geçersiz kullanıcı adı veya şifre</h2>';
    }
} else {
    echo 'Geçersiz istek.';
}
?>
