<?php
$isOk = false;
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
        if ($isOk == false) {
          echo 'C\'est pas bon !!!';
        } else {
          echo 'C\'est ok !!';
        }
      ?>
    </p>
  </body>
</html>
