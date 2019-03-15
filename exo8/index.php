<?php
function add($firstNumber = 1, $secondNumber = 2, $thirdNumber = 3){
  $add = $firstNumber + $secondNumber + $thirdNumber;
  return $add;
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 4 exo 8 php</title>
  </head>
  <body>
      <p><?= add() ?></p>
  </body>
</html>
