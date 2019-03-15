<?php function genderAge($gender, $age){
  if($gender == 'homme'){
    if($age < 18){
      return 'Vous êtes un homme et vous êtes mineur.';
    }else{
      return 'Vous êtes un homme et vous êtes majeur.';
    }
  }else{
    if($age < 18){
      return 'Vous êtes une femme et vous êtes mineure.';
    }else{
      return 'Vous êtes une femme et vous êtes majeure.';
    }
  }
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 4 exo 7 php</title>
  </head>
  <body>
    <p><?= genderAge('homme', 21) ?></p>
  </body>
</html>
