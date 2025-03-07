<?php
$cookie_name = "user";
$cookie_value = "guest";
$expiration = time() + (86400 * 1); // 1 день

setcookie($cookie_name, $cookie_value, $expiration, "/");

echo "Куки 'user' обновлены на значение 'guest'.<br>";

if(isset($_COOKIE[$cookie_name])) {
    echo "Куки '" . $cookie_name . "' существует и имеет значение: " . $_COOKIE[$cookie_name];
} else {
    echo "Куки '" . $cookie_name . "' не установлены.";
}
?>
