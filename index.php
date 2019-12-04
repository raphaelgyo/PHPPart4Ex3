<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 3 : Les fonctions</title>
  </head>
  <body>
    <p>
      <?php
      function compare($num1, $num2){
        if ($num1 > $num2){
          return 'Le premier nombre est plus grand';
        }elseif ($num1 < $num2){
          return 'Le premier nombre est plus petit';
        }else ($num1 == $num2){
          return 'Les deux nombres sont égaux';
        }
      };
      echo compare();
      ?>
    </p>
  </body>
</html>
