<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6 PHP Partie 1</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $name = 'Stephane';
      echo "Bonjour $name, comment vas tu ?"; // Avec des guillemets doubles, les variables sont analysées et rempalcées
      echo "<br/>";
      echo 'Bonjour ' . $name . ', comment vas tu ?'; //Avec des guillements simples, il faut concaténer, méthode à préférer
     ?>
  </body>
</html>
