<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body>
    <div class="container mt-5">
        <form action="save.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email" required>
            </div>
            <div class="mb-3">
                <label for="pasword" class="form-label">Mot de passe</label>
                <input type="pasword" class="form-control" id="pasword" name="pasword" placeholder="Entrez votre mot de passe" required>
            </div>
            <button type="submit" class="btn btn-primary">Inscription</button>
        </form>
    </div>
</body>
</html>