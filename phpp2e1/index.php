<?php
$age = 19
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
        if ($age >= 18)
        {
          echo 'vous êtes majeur !';
        }
        else {
          echo 'vous êtes mineur !';
        }
      ?>
    </p>
  </body>
</html>
