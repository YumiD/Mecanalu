<?php
    session_start();
    $_SESSION["gamme"] = $_POST['gamme'];
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Choix du produit</title>
    </head>
    
    <body>
    <div class="header">
        <img src="ressources/mecanalu.png">
    </div> 

    <div id="content">
        <h3> Choix du produit: </h3>
        
        <div id="form"><form action="remplissage.php" method="post">
        <p><input type="submit" value="Suivant"></p>
        </form> </div>
    </div>
    </body>
</html>