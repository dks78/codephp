
<?php
$name=$_POST['name'];
$pasword=$_POST['pasword'];
$email=$_POST['email'];
$pasword=password_hash($pasword , PASSWORD_DEFAULT );

$pdo = new \PDO('mysql:host=127.0.0.1;dbname=donkeyair', 'root', 'Caraboumga1.');
$query = "INSERT INTO user (pasword, email, name) VALUES (:pasword,:email,:name)";
$statement = $pdo->prepare($query);
$statement->bindValue(':name', $name, \PDO::PARAM_STR);
$statement->bindValue(':email', $email, \PDO::PARAM_STR);
$statement->bindValue(':pasword', $pasword, \PDO::PARAM_STR);
$statement->execute();
header("location:index.php");
?>