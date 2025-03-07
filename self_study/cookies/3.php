<?php
$cookie_name = "preferences";
$cookie_value = "dark_mode";
$expiration = time() + (86400 * 7); // 1 неделя

setcookie($cookie_name, $cookie_value, $expiration, "/");

echo "Куки 'preferences' установлены.<br>";

if(isset($_COOKIE[$cookie_name])) {
    echo "Куки '" . $cookie_name . "' существует и имеет значение: " . $_COOKIE[$cookie_name];
} else {
    echo "Куки '" . $cookie_name . "' не установлены.";
}
?>
