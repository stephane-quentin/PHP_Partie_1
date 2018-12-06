<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4 PHP Partie 1</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $int = NULL;
      settype($int, 'NULL');
      echo "ma variable vide affiche : " . gettype($int). "<br/>";
      $int = 1;
      echo "elle affiche maintenant : " . $int;
     ?>
  </body>
</html>
