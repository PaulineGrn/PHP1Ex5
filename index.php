<!-- Déclaration de la variable answer -->
<?php
$answer='Non';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP1Ex5</title>
  </head>
  <body>
    <!-- Déclaration d'un paragraphe -->
    <p><?php
    // Déclaration de l'instruction if. Si la réponse est oui alors on affiche le message suivant(vous avez...)
    if ($answer=='Oui')
    {
      echo'Vous avez répondu oui';
    }
    // Sinon si la réponse est non alors on affiche le message suivant (vous avez...)
    elseif ($answer=='Non')
    {
      echo'Vous avez répondu non';
    }
    ?></p>
    </body>
</html>
