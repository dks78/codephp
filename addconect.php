<?php
  $email=$_POST['email'];
  $name=$_POST['name'];
  $pasword=$_POST['pasword'];
  
  $pdo = new \PDO('mysql:host=127.0.0.1;dbname=donkeyair', 'root', 'Caraboumga1.');
  $query = "INSERT INTO user (name,pasword,email)
      VALUES (:name,:pasword,:email)";
  $statement = $pdo->prepare($query);
  $statement->bindValue(':name', $name, \PDO::PARAM_STR);
  $statement->bindValue(':pasword', $pasword, \PDO::PARAM_STR);
  $statement->bindValue(':email', $email, \PDO::PARAM_STR);
  $statement->execute();
  header("location:page1.php");
?>