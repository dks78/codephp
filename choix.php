<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link rel="stylesheet" href="choix.css">
  <script>
    //a Apprendre
    function updatePrice() {
      var compagnySelect = document.getElementById("compagny");
      var destinitySelect = document.getElementById("destinity");
      var prixInput = document.getElementById("prix");

      var selectedCompagny = compagnySelect.options[compagnySelect.selectedIndex].text;
      var selectedDestinity = destinitySelect.options[destinitySelect.selectedIndex].text;
      var prix = 0;
      // A Apprendre

      if (selectedCompagny === "Emirats") {
        if (selectedDestinity === "paris a Maroc") {
          prix = 500;
        } else if (selectedDestinity === "Paris a Caraiibes") {
          prix = 700;
        } else if (selectedDestinity === "Paris a Ile maurice") {
          prix = 800;
        } else if (selectedDestinity === "Paris a Dubai") {
          prix = 1000;
        } 
      } else if (selectedCompagny === "Airfrance"){
          if(selectedDestinity === "Paris a Caraiibes"){
            prix = 4256;
          } else if (selectedDestinity === "Paris a Ile maurice"){
            prix = 3900;
          } else if (selectedDestinity === "Paris a Dubai") {
            prix = 7895;
          } else if  (selectedDestinity === "paris a Maroc") {
            prix = 1500;
          }
        } else if (selectedCompagny === "Qatard"){
          if(selectedDestinity === "Paris a Caraiibes"){
            prix = 14256;
        } else if (selectedDestinity === "Paris a Ile maurice"){
            prix = 43900;
        }else if (selectedDestinity === "Paris a Dubai") {
            prix = 17895;
          } else if  (selectedDestinity === "paris a Maroc") {
            prix = 461500;
          }
      }
      prixInput.value = prix;
      prixInput.style.display = "block";
    }
  </script>
  <title>Document</title>
</head>
<body>
  <header>
    <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>
          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="page1.php" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Acceuil
              </a>
            </li>
            <li>
              <a href="panier.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                panier
              </a>
            </li>
            <li>
              <a href="index.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                deconextion
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <main class="haut">
    <h1>CHOIX DE VOTRE VOL</h1>
  </main>
  <form  action="addconect.php" method="POST" class="mx-auto w-50 h-50  p-4">
    <div class="mb-3">
      <label for="comapgny">Choisie ta compagny</label>
      <select class="form-select" id="compagny" name="compagny" onchange="updatePrice()" required>
        <option>Emirats</option>
        <option>Airfrance</option>
        <option>Qatard</option>
        <option>India</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="destinity">Choisie ta destination</label>
      <select class="form-select" id="destinity" name="destinity" onchange="updatePrice()" required>
        <option>paris a Maroc</option>
        <option>Paris a Caraiibes</option>
        <option>Paris a Ile maurice</option>
        <option>Paris a Dubai</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="prix" class="form-label">Prix</label>
      <input type="number" class="form-control" id="prix" name="prix" readonly>
    </div>
    <div class="mb-3 form-check">
      <label for="datetime">Sélectionnez une date et une heure :</label>
      <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
      <input type="submit" class="form-control" value="Envoyer">
    </div>
  </form>
</body>
</html>