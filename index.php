<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>conect</title>
</head>
<body>
    <form   class="conect" action="conexion.php" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="pasword">Password</label>
            <input type="password" class="form-control" name="pasword" id="pasword" placeholder="Password">
        </div>
        <a href="inscription.php">inscription</a>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</body>
</html>
<?php

?>