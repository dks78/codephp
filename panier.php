<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Panier</title>
</head>
<body>
  <header>
    <h1>DONKEYAIR</h1>
  </header>
    <nav class="navbar bg-primary" data-bs-theme="dark">
      <a href="page1.php">Acceuil</a>
      <a href="info.php" target="_blank">info</a>
      <a href="index.php">deconecxtion</a>
      <div class="container-fluid">
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </nav>
  <main>
    <h2>Votre Panier</h2>
    <?php
      if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) {
        echo "<ul>";
        foreach ($_SESSION['panier'] as $key => $vol) {
          echo "<li>Vol réservé : $vol ";
          echo "<a href='supprimer.php?key=$key'>Supprimer</a></li>";
        }
        echo "</ul>";
      } else {
        echo "<p>Aucun vol sélectionné dans le panier.</p>";
      }
    ?>
  </main>
</body>
</html>