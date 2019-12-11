<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:
- Solo con l'utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
- Attraverso l'utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà
attraverso handlebars.
Utilizzare: Html, Sass, JS, jQuery, handlebars, Php
Opzionale:
- Attraverso un'altra chiamata ajax, filtrare gli album per artista -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Dischi</title>
    <link rel="stylesheet" href="style.css">
    <?php

      include "data.php";

    ?>
  </head>
  <body>

    <?php foreach ($database as $disco) { ?>
        <h2><?php echo $disco['title']; ?></h2>
        <h3><?php echo $disco['author']; ?></h3>
        <h4><?php echo $disco['year']; ?></h4>
        <img src="<?php echo $disco['poster']; ?>" alt="">
      <?php } ?>

  </body>
</html>
