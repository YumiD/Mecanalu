<?php
    session_start();
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Mecanalu - Produit</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/boreale_bb.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 60%;
				max-width: 350px;
                max-height:506px;
                width: 100%;
                height: 100%;;
				margin-top: 4%;
				cursor: pointer;}
            .image2{
                border:none;
                background-image:url('../ressources/boreale_verriere.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 100%;
                height: 100%;
				margin-top: 4%;
				cursor: pointer;}
        </style>
    </head>

    <body id="page">

	<div class="header">
        <?php include('../includes/header_evidence.html'); ?>
	</div>
		
	</div> 

    <div id="content">
        <h3> Boreale : Choix de la finition</h3>
        <h4> Plusieurs choix possibles <h4>

        <span class="legend3"> Bord à Bord </span>
        <span class="legend3"> Verrière </span>

		<form action="../buffer/buffer_boreale_produit.php" method="post">
        <div id="horizontal"> 

            <div id="checkbox">
            <input type="checkbox" id="boreale_bb"  name="boreale_bb" class="boreale_produit"/>
            <label for="boreale_bb"><img src="../ressources/boreale_bb.png" /></label>
            <input type="checkbox" id="boreale_verriere" name="boreale_verriere" class="boreale_produit"/>
            <label for="boreale_verriere"><img src="../ressources/e_bb.png" /></label>
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