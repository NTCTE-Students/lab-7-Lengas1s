<?php
session_start();

$_SESSION['username'] = 'student';

echo "Сессия инициализирована и переменная 'username' установлена.<br>";

if(isset($_SESSION['username'])) {
    echo "Переменная сессии 'username' существует и имеет значение: " . $_SESSION['username'];
} else {
    echo "Переменная сессии 'username' не установлена.";
}
?>
