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


      <!-- SCRIPT -->

      <!-- handlebars -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.5.3/handlebars.min.js"></script>
      <script id="disco-template" type="text/x-handlebars-template">
        <div id="disco">
          <h3>{{title}}</h3>
          <h5>{{author}}</h5>
          <h6>{{year}}</h6>
          <img src="{{poster}}">
        </div>
      </script>
      <!-- /handlebars -->

      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

      <script src="script.js" type="text/javascript">
      </script>

  </body>
</html>
