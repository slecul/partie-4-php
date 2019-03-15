<?php function sentence($firstname, $lastname, $age){
  return 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . 'ans.';
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 4 exo 6 php</title>
  </head>
  <body>
    <p><?= sentence('Simon', 'Lecul', 21) ?></p>
  </body>
</html>
