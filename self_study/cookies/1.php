<?php
$cookie_name = "user";
$cookie_value = "admin";
$expiration = time() + (86400 * 1); // 1 день в секундах

setcookie($cookie_name, $cookie_value, $expiration, "/");

echo "Куки 'user' установлены.<br>";

if(isset($_COOKIE[$cookie_name])) {
    echo "Куки '" . $cookie_name . "' существует и имеет значение: " . $_COOKIE[$cookie_name];
} else {
    echo "Куки '" . $cookie_name . "' не установлены.";
}
?>
