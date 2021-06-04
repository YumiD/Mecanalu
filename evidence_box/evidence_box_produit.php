<?php
    session_start();
    $_SESSION["buffer_evidence_box_produit_size"] = 0;
    $_SESSION["box_little"] = false;
    $_SESSION["box_duo"] = false;
    $_SESSION["box_media"] = false;
    $_SESSION["box_alta"] = false;
    $_SESSION["box_grande"] = false;
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Mecanalu - Produit</title>
    </head>

    <body id="page">

	<div class="header">
        <?php include('../includes/header_evidence.html'); ?>
	</div>
		
	</div> 

    <div id="content">
        <h3> Evidence Box : Choix de la box</h3>
        <h4> Plusieurs choix possibles <h4>

            <form action="../buffer/buffer_evidence_box_produit.php" method="post">

                <span style="margin-left:80px;" class="legend4"> Box Little </span>
                <span style="margin-left:80px;" class="legend4"> Box Duo </span>
                <span style="margin-left:80px;" class="legend4"> Box Media </span>
                <span style="margin-left:80px;" class="legend4"> Box Alta </span>
                <span style="margin-left:80px;" class="legend4"> Box Grande </span>

            <div id="horizontal"> 
                
                <div id="checkbox">
                <input type="checkbox" id="box_little"  name="box_little" class="evidence_box_produit"/>
                <label for="box_little"><img src="../ressources/box_little.png" /></label>
                <input type="checkbox" id="box_duo" name="box_duo" class="evidence_box_produit"/>
                <label for="box_duo"><img src="../ressources/box_duo.png" /></label>
                <input type="checkbox" id="box_media" name="box_media" class="evidence_box_produit"/>
                <label for="box_media"><img src="../ressources/box_media.png" /></label>
                <input type="checkbox" id="box_alta" name="box_alta" class="evidence_box_produit"/>
                <label for="box_alta"><img src="../ressources/box_alta.png" /></label>
                <input type="checkbox" id="box_grande" name="box_grande" class="evidence_box_produit"/>
                <label for="box_grande"><img src="../ressources/box_grande.png" /></label>
                </div>
            </div>

            <div id="form">
            <p><input type="submit" value="Continuer" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';"></p>
            </div>

            </form>
		
	<footer>
       <!--<button onclick="window.location.href='../index.php'">Précédent</button>-->
    </footer>
	
    </div>

    </body>

    
</html>