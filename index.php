<?php
// Déclaration de la variable answer
$answer='oui';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP1Ex5</title>
  </head>
  <body>
    <?php
    // Déclaration de l'instruction if. Si la réponse est oui alors on affiche le message suivant(vous avez...)
    if ($answer=='Oui'){
      ?>
      <p>Vous avez répondu oui</p>
      <?php
    // Sinon la réponse est non alors on affiche le message suivant (vous avez...)
    }else{
      ?>
      <p>Vous avez répondu non</p>
    <?php } ?>
    </body>
</html>
