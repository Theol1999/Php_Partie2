<?php
  $isEasy = true;
  $isDifficult = true;
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
        if ($isEasy)
        {
          echo "C'est facile !";
        }
        else
        {
          echo "c'est difficile !";
        }
       ?>
    </p>
    <p>
      <?php
      if ($isDifficult == true)
      {
          echo "c'est difficle !";
      }
      elseif ($isDifficult == false)
      {
          echo "c'est faile !";
      }
      ?>
    </p>
  </body>
</html>
