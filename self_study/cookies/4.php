<?php
$cookie_name = "language";
$cookie_value = "English";
$expiration = time() + (3600 * 2); // 2 часа

setcookie($cookie_name, $cookie_value, $expiration, "/");

echo "Куки 'language' установлены.<br>";

if(isset($_COOKIE[$cookie_name])) {
    echo "Куки '" . $cookie_name . "' существует и имеет значение: " . $_COOKIE[$cookie_name];
} else {
    echo "Куки '" . $cookie_name . "' не установлены.";
}
?>
