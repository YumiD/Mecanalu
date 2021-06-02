<?php
    session_start();
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/box_alta.png');
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
                background-image:url('../ressources/box_duo.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 100%;
                height: 100%;
				margin-top: 4%;
				cursor: pointer;}
            .image3{
                border:none;
                background-image:url('../ressources/box_grande.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 100%;
                height: 100%;
				margin-top: 4%;
				cursor: pointer;}
            .image4{
                border:none;
                background-image:url('../ressources/box_little.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 100%;
                height: 100%;
				margin-top: 4%;
				cursor: pointer;}
            .image5{
                border:none;
                background-image:url('../ressources/box_media.png');
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
        <h3> Evidence Box : Choix de la box</h3>
        <h4> Plusieurs choix possibles <h4>

		
        <div id="horizontal"> 
            <form action="evidence_box_remplissage.php" method="post">
                <div class="blocimage"><span class="legend"> Box Little </span><input type="submit" id="horizontal_item" name="produit" value="box_little" alt="Submit Form"  class="image4"/></div>
                <div class="blocimage"><span class="legend"> Box Duo </span><input type="submit" id="horizontal_item" name="produit" value="box_duo" alt="Submit Form"  class="image2"/></div>
                <div class="blocimage"><span class="legend"> Box Media </span><input type="submit" id="horizontal_item" name="produit" value="box_media" alt="Submit Form"  class="image5"/></div>
                <div class="blocimage"><span class="legend"> Box Alta </span><input type="submit" id="horizontal_item" name="produit" value="box_alta" alt="Submit Form" class="image1"/></div>
                <div class="blocimage"><span class="legend"> Box Grande </span><input type="submit" id="horizontal_item" name="produit" value="box_grande" alt="Submit Form"  class="image3"/></div>
        </div>
            </form>
		
	<footer>
       <button onclick="window.location.href='../index.php'">Précédent</button>
    </footer>
	
    </div>

    </body>

    
</html>