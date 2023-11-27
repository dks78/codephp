



<?php
include 'header.php';

  $destinity=$_POST['destinity'];
  $prix=$_POST['prix'];
  $compagny=$_POST['compagny'];
  $datetime=$_POST['datetime'];
  
  $pdo = new \PDO('mysql:host=127.0.0.1;dbname=donkeyair', 'root', 'Caraboumga1.');
  $query = "INSERT INTO voldubai (compagny,datetime,destinity,prix)
      VALUES (:compagny,:datetime,:destinity,:prix)";
  $statement = $pdo->prepare($query);
  $statement->bindValue(':destinity', $destinity, \PDO::PARAM_STR);
  $statement->bindValue(':compagny', $compagny, \PDO::PARAM_STR);
  $statement->bindValue(':datetime', $datetime, \PDO::PARAM_STR);
  $statement->bindValue(':prix', $prix, \PDO::PARAM_STR);
  $statement->execute();
  // echo $statement;
  // header("location:page1.php");
  $querySelect = "SELECT * FROM voldubai WHERE idvoldubai = LAST_INSERT_ID()";
  $statementSelect = $pdo->query($querySelect);
  $volDetails = $statementSelect->fetch(\PDO::FETCH_ASSOC);
  
  // echo "<h2>Détails du vol enregistré :</h2>";
  // echo "<p>Compagnie : " . $volDetails['compagny'] . "</p>";
  // echo "<p>Date et Heure : " . $volDetails['datetime'] . "</p>";
  // echo "<p>Destination : " . $volDetails['destinity'] . "</p>";
  // echo "<p>Prix : " . $volDetails['prix'] . "</p>";:
  //  echo "<a href='reserve.php?vol=$compagny $destinity'>Ajouter au panier</a>";
// var_dump($volDetails)
?>

ezdsqsqdsqsqsqsddddddddddddddddddddddddddddddd
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
  </button>
  <button type="button" class="list-group-item list-group-item-action"> Compagny:  <?php echo  $compagny?></button>
  <button type="button" class="list-group-item list-group-item-action"> Date et heur:  <?php echo  $datetime?></button>
  <button type="button" class="list-group-item list-group-item-action"> Destination:  <?php echo  $destinity?></button>
  <button type="button" class="list-group-item list-group-item-action" disabled>prix:  <?php echo  $prix?></button>
</div>

</body>
</html>
<?php
  echo "<a href='reserve.php?vol=$compagny $destinity'>Ajouter au panier</a>";
?>