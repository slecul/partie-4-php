<?php
  function concatenation($firstSentence, $secondSentence){
  $thirdSentence = $firstSentence . ' ' . $secondSentence;
  return $thirdSentence;
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 4 exo 3 php</title>
  </head>
  <body>
    <p><?= concatenation('Bonjour les potes !', 'Comment ça va ?') ?></p>
  </body>
</html>
