<?php
session_start();

$email=$_POST['email'];
$pasword=$_POST['pasword'];
var_dump($_POST);
echo "<br>";
$pdo = new \PDO('mysql:host=127.0.0.1;dbname=donkeyair', 'root', 'Caraboumga1.');
$query = "SELECT * FROM user where email=:myEmail";
$statement = $pdo->prepare($query);
$statement->bindValue(':myEmail', $email, \PDO::PARAM_STR);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($user);

// if email user is not in database  
if ($user===false) {
    header("location:index.php");
}
else {
    // if password in form is equal password in database
    // if ($user['password']===$pwd){
    if (password_verify($pasword,$user['pasword'])) {
        //'Password is valid!';
        // save email in session variable
        $_SESSION['user']=$user['email'];
        // redirect to index.php
        header("location:page1.php");
    }
    else {
        // if password is not valid
        header("location:index.php");
    }
}
?>
