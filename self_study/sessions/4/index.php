<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function addItemToCart($item) {
    $_SESSION['cart'][] = $item;
}

function removeItemFromCart($index) {
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        // Переиндексация массива после удаления элемента
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'add') {
        if (isset($_GET['item'])) {
            addItemToCart($_GET['item']);
        }
    } elseif ($action == 'remove') {
        if (isset($_GET['index'])) {
            removeItemFromCart($_GET['index']);
        }
    }
}

echo "<h1>Корзина</h1>";

if (empty($_SESSION['cart'])) {
    echo "Корзина пуста.";
} else {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $index => $item) {
        echo "<li>" . $item . " <a href='?action=remove&index=" . $index . "'>Удалить</a></li>";
    }
    echo "</ul>";
}

echo "<br><a href='?action=add&item=Товар1'>Добавить Товар1</a> | <a href='?action=add&item=Товар2'>Добавить Товар2</a>";
?>
