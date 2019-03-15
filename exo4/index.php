<?php function compare($firstNumber, $secondNumber){
  if($firstNumber > $secondNumber){
    return 'Le premier nombre est le plus grand.';
  }else if($firstNumber < $secondNumber){
    return 'Le premier nombre est le plus petit.';
  }else{
    return "Les deux nombres sont identiques.";
  }
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie 4 exo 4 php</title>
  </head>
  <body>
<p><?= compare(2,2) ?></p>
  </body>
</html>
