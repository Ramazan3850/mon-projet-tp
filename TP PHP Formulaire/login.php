<?php
session_start();

$users = [
    ["email" => "ramazanilkhan38@gmailcom", "password" => password_hash("kitdesoin", PASSWORD_DEFAULT)],
    ["email" => "user2@example.com", "password" => password_hash("password2", PASSWORD_DEFAULT)]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['email'] == $email && password_verify($password, $user['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            header("Location: welcome.php");
            exit;
        }
    }

    header("Location: login.html?error=1");
    exit;
}
?>
