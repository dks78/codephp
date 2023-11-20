<?php
session_start();

if (isset($_GET['key'])) {
    $key = $_GET['key'];

    if (isset($_SESSION['panier'][$key])) {
        unset($_SESSION['panier'][$key]);
    }
}

header("Location: panier.php");
exit;
?>