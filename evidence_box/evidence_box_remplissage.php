<?php
    session_start();

    if(!empty($_POST['produit'])) {    
        $produit = $_POST['produit'];
        $_SESSION["produit"] = $produit;
    }
    else $produit=$_SESSION["produit"];
    

    if($produit=="box_alta"){
        $nom_produit="Alta";
    }
    else if($produit=="box_duo"){
        $nom_produit="Duo";
    }
    else if($produit=="box_grande"){
        $nom_produit="Grande";
    }
    else if($produit=="box_little"){
        $nom_produit="Little";
    }
    else if($produit=="box_media"){
        $nom_produit="Media";
    }
    $_SESSION["nom_produit"] = $nom_produit;
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Mecanalu - Remplissage</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/box_remplissage_1.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                max-height:219px;
				width: 202px;
				max-width: 100%;
				cursor: pointer;}
            .image2{
                border:none;
                background-image:url('../ressources/box_remplissage_2.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                max-height:219px;
				width: 291px;
				max-width: 100%;
				cursor: pointer;}
            .image3{
                border:none;
                background-image:url('../ressources/box_remplissage_3.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                max-height:219px;
				width: 291px;
				max-width: 100%;
				cursor: pointer;}
            .image4{
                border:none;
                background-image:url('../ressources/box_remplissage_4.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                max-height:219px;
				width: 291px;
				max-width: 100%;
				cursor: pointer;}
        </style>
    </head>

    <body id="page">
    <div class="header">
        <?php include('../includes/header_evidence.html'); ?>
	</div>
	
	</div>  

    <div id="content">
        <h3> EVIDENCE BOX - remplissage</h3>

        <div id="horizontal"> 
            <h4> Choisissez entre </h4>  
            <span class="legend2"> 3 faces pleines (standard) </span>
            <span class="legend2"> 2 faces pleines + 1 côté vitré </span>	
            <span class="legend2"> Fond plein + 2 côté vitré </span>	
            <span class="legend2"> 2 côtés pleins "en tunnel" + fond vitré </span>			
            <form action="evidence_box_finition.php" method="post">
            <input type="submit" id="horizontal_item" name="remplissage" value="box_remplissage_1" alt="Submit Form" class="image1"/>
            <input type="submit" id="horizontal_item" name="remplissage" value="box_remplissage_2" alt="Submit Form"  class="image2"/>
            <input type="submit" id="horizontal_item" name="remplissage" value="box_remplissage_3" alt="Submit Form"  class="image3"/>
            <input type="submit" id="horizontal_item" name="remplissage" value="box_remplissage_4" alt="Submit Form"  class="image4"/>
        </div></form>
        
		
	<footer>
        <button onclick="window.location.href='evidence_box_produit.php'">Précédent</button>
    </footer>
    </div>
    </body>


</html>