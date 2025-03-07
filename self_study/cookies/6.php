<?php
$cookie_name = "country";
$cookie_value = "Russia";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$greeting = "Hello!";
if(isset($_COOKIE['country']) && $_COOKIE['country'] == 'Russia') {
    $greeting = "Привет!";
}

echo $greeting;
?>
