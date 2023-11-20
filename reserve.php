<?php
session_start();

if (isset($_GET['vol'])) {
    $vol = $_GET['vol'];

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    array_push($_SESSION['panier'], $vol);
}

header("Location: panier.php");
exit;
?>