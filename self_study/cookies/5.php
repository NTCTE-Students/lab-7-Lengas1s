<?php
$cookie_name = "visited";

if(isset($_COOKIE[$cookie_name])) {
    $count = $_COOKIE[$cookie_name] + 1;
} else {
    $count = 1;
}

setcookie($cookie_name, $count, time() + (86400 * 30), "/"); // Куки на 30 дней

echo "Страница посещена " . $count . " раз.";
?>
