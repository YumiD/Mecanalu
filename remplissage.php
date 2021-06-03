<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Mecanalu - Remplissage</title>
    </head>

    <body>
    <div class="header">
      <?php include('includes/header.html'); ?>
    </div> 

    <div id="content">
        <h3> Remplissage: </h3>
        <script>
            document.location.href="creation.php";
        </script>
    </div>
    </body>
</html>