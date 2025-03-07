<?php
session_start();

if(isset($_SESSION['username'])) {
    echo "Добро пожаловать, " . $_SESSION['username'] . "!";
} else {
    echo "Вы не авторизованы. Вернитесь на страницу авторизации.";
}
?>
