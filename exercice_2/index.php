<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2 PHP Partie 1</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $firstname = 'Stephane';
      $lastname = 'Quentin';
      $age = '37.564848dfgfdg';
      settype($age,'integer'); //n'affichera que 37
      echo 'Bonjour, je suis ' . $firstname . ' ' . $lastname  ." et j'ai " . $age . ' ans.';
     ?>
  </body>
</html>
