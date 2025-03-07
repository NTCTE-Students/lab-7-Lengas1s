<?php
$cookie_name = "session_id";

// Удаление куки установкой времени истечения в прошлое
setcookie($cookie_name, "", time() - 3600, "/");

echo "Куки 'session_id' удалены.<br>";

if(isset($_COOKIE[$cookie_name])) {
    echo "Куки '" . $cookie_name . "' все еще существует.";
} else {
    echo "Куки '" . $cookie_name . "' больше не существует.";
}
?>
