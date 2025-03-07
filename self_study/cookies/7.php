<?php
$cookie_name = "theme";
if(isset($_POST['theme'])) {
    $cookie_value = $_POST['theme'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
} else {
    if(isset($_COOKIE[$cookie_name])) {
        $cookie_value = $_COOKIE[$cookie_name];
    } else {
        $cookie_value = "light";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Изменение темы</title>
</head>
<body>
    <h1>Текущая тема: <?php echo $cookie_value; ?></h1>
    <form method="post">
        <select name="theme">
            <option value="light" <?php if($cookie_value == 'light') echo 'selected'; ?>>Светлая</option>
            <option value="dark" <?php if($cookie_value == 'dark') echo 'selected'; ?>>Темная</option>
        </select>
        <input type="submit" value="Изменить тему">
    </form>
</body>
</html>
