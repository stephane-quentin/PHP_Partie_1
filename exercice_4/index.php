<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4 PHP Partie 1</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $string = 'Stephane';
      $int = 37;
      $float = 99.9;
      $bool = true;
      settype($string, 'string');
      settype($int, 'integer');
      settype($float, 'float');
      settype($bool, 'boolean');      
      echo "Je m'appelle " . $string . ", j'ai " . $int . " ans, je pèse " . $float . " kg et ma variable booléenne : " . $bool;
     ?>
  </body>
</html>
