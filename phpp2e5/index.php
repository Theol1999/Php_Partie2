<?php
$gender = 'Homme';
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
      if ($gender != 'Homme') {
        echo 'C\'est une développeuse !!!';
      } else {
        echo 'C\'est un développeur !!!';
      }

      ?>
    </p>
  </body>
</html>
