<?php
//déclaration de la variable age avec sa valeur
$age = 45;
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 2 exo 2</title>
</head>
<body>
  <?php
  if ($age > 0 && $age < 120){
    if ($age >= 18 && $gender == 'femme'){
      ?>
      <p>Vous êtes une femme et vous êtes majeure</p>
    <?php } elseif ($age < 18 && $gender == 'femme'){ ?>
      <p>Vous êtes une femme et vous êtes mineure</p>
    <?php } elseif ($age >= 18 && $gender == 'homme'){ ?>
      <p>Vous êtes un homme et vous êtes majeur</p>
    <?php } elseif ($age < 18 && $gender == 'homme'){ ?>
      <p>Vous êtes un homme et vous êtes mineur</p>
    <?php } else { ?>
      <p>Vous avez fait une erreur dans le genre</p>
      <?php
    }
  } elseif ($gender != 'femme' && $gender != 'homme'){
    ?>
    <p>Vous avez fait une erreur dans l'âge et dans le genre</p>
  <?php } else { ?>
    <p>Vous avez fait une erreur dans l'âge</p>
  <?php } ?>
</body>
</html>
