<?php
session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Гость"; // Или перенаправить на страницу авторизации
}

echo "Привет, " . $_SESSION['username'] . "!<br>";
echo "<a href='logout.php'>Выйти</a>";
?>
