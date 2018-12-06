<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1 PHP Partie 1</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $name = 'Stephane';
      echo "Bonjour $name."; // Avec des guillemets doubles, les variables sont analysées et rempalcées
      echo ' Bonjour ' . $name; //Avec des guillements simples, il faut concaténer, méthode à préférer
     ?>
  </body>
</html>
