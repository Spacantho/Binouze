<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Comment Créer un beau Formulaire de Contact en HTML & CSS</title>
    <link rel="stylesheet" href="style.css" />
    <link/>
  </head>
  <body>
    <form action="assets/php/insertion.php" method="post">
      <h1>Contactez-nous</h1>
      <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
          <div class="groupe">
            <label>Nom</label>
            <input type="text" autocomplete="off" name="biere" />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Degres</label>
            <input type="text" autocomplete="off" name="degres"/>
            <i class="fas fa-envelope"></i>
          </div>

      <div class="pied-formulaire" align="center">
        <button>Envoyer le message</button>
      </div>
    </form>
  </body>
</html>
