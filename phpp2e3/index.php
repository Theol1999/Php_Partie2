<?php
$age = 17;
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <p>
      <?php
        if ($age >= 18 && $gender == 'homme') {
          echo "vous êtes un homme et vous êtes majeur";
        }
        elseif ($age < 18 && $gender == 'homme') {
          echo "Vous êtes un homme et vous êtes mineur";
        }
        elseif ($age >= 18 && $gender != 'homme') {
          echo "Vous êtes une femme et vous êtes majeur";
        }
        elseif ($age < 18 && $gender != 'homme') {
          echo "Vous êtes uen femme et vous êtes mineur";
        }
      ?>
    </p>
  </body>
</html>
