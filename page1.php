<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header>
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
    <DIv></DIv>
    <h1 class="display-1">DONKEYAIR</h1>
  </header>
    <h2>Réserver ici vos Vols</h2>
    <form action="panier.php" method="post">
      <table class="table table-dark table-borderless">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Vol</th>
            <th scope="col"></th> <!-- Ajoutez une colonne pour le bouton de réservation -->
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><a href="dubai.php">Vol à Dubai</a></td>
            <td>
              <button type="submit" name="vol" value="dubai" class="btn btn-primary">Réserver</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><a href="maroc.php">Vol au maroc</a></a></td>
            <td>
              <button type="submit" name="vol" value="maroc" class="btn btn-primary"><a href="reserve.php?vol=maroc">reserver</a></button>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </main>
</body>
</html>






