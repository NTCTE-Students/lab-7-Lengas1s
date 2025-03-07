<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password']; // В реальном приложении пароль так хранить нельзя!

    header("Location: welcome_page.php");
    exit();
} else {
    echo "Ошибка: Данные не были переданы.";
}
?>
