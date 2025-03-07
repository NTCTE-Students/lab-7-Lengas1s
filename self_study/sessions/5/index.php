<?php
session_start();

if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date('Y-m-d H:i:s');
}

$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');

echo "Время первого посещения: " . $_SESSION['first_visit_time'] . "<br>";
echo "Время последнего посещения: " . $_SESSION['last_visit_time'] . "<br>";
?>
