<?php
setcookie("font_size", "16px", time() + (86400 * 30), "/");
setcookie("layout", "wide", time() + (86400 * 30), "/");
setcookie("color_scheme", "blue", time() + (86400 * 30), "/");

echo "Куки установлены:<br>";

if(isset($_COOKIE['font_size'])) {
    echo "font_size: " . $_COOKIE['font_size'] . "<br>";
}
if(isset($_COOKIE['layout'])) {
    echo "layout: " . $_COOKIE['layout'] . "<br>";
}
if(isset($_COOKIE['color_scheme'])) {
    echo "color_scheme: " . $_COOKIE['color_scheme'] . "<br>";
}
?>
