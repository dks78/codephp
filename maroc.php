<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<nav class="navbar bg-primary" data-bs-theme="dark">
      <a href="page1.php">Acceuil</a>
      <a href="info.php" target="_blank">info</a>
      <a href="index.php">deconecxtion</a>
      <div class="container-fluid">
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    </nav>  
</body>
</html>

<?php
$pdo = new \PDO('mysql:host=127.0.0.1;dbname=donkeyair', 'root', 'Caraboumga1.');
$query = "SELECT * FROM volmaroc";
$statement = $pdo->query($query);
$air = $statement->fetchAll(PDO::FETCH_ASSOC);

 foreach($air as $oneair){
      $id = $oneair ['idvolmaroc'];
      $prix = $oneair['prix'];
      $datetime = $oneair['datetime'];
      $destinity= $oneair['destinity'];
      $compagny = $oneair['compagny'];
      echo $prix ."</br>". $datetime ."</br>".$destinity ."</br>". $compagny;
     ;
 }


?>