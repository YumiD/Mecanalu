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

        <div id="horizontal"> 
		  
		<form action="boreale_finition.php" method="post">
           <div class="blocimage"><span class="legend"> Bord à Bord </span><input type="submit" id="horizontal_item" name="produit" value="boreale_bb" alt="Submit Form" class="image1"/></div>
            <div class="blocimage"><span class="legend"> Verrière </span><input type="submit" id="horizontal_item" name="produit" value="boreale_verriere" alt="Submit Form"  class="image2"/></div>
        </form></div>
		
	<footer>
       <button onclick="window.location.href='../index.php'">Précédent</button>
    </footer>
	
    </div>

    </body>

    
</html>