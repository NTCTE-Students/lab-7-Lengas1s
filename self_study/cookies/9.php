<?php
$cookie_name = "loggedin";

if(!isset($_COOKIE[$cookie_name])) {
    header("Location: login.php"); // Предполагается, что login.php существует
    exit();
} else {
    echo "Добро пожаловать! Вы авторизованы.";
    // Здесь может быть контент для авторизованных пользователей
}
?>
