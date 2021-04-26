<?php
    session_start();

    if(!empty($_POST['produit'])) {    
        $produit = $_POST['produit'];
        $_SESSION["produit"] = $produit;
    }
    else $produit=$_SESSION["produit"];
    

    if($produit=="e_cj"){
        $nom_produit="Couvre joint";
    }
    else if($produit=="e_bb"){
        $nom_produit="Bord à Bord";
    }
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/plein.png');
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
                background-image:url('../ressources/vitre.png');
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
        <h3> EVIDENCE - COUVRE-JOINT - remplissage</h3>
        
            <div id="image_produit">
                <img class="image_produit" src="../ressources/<?php echo $produit; ?>.png">
            </div>
            <div class="horizontal_remplissage" id="horizontal"> 
            <p><?php echo $nom_produit; ?></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <h4> Choisissez entre </h4>  
			<span class="legend2"> Plein </span>
			<span class="legend2"> Vitré sur allège </span>			
            <form action="evidence_finition.php" method="post">
            <input type="submit" id="horizontal_item" name="remplissage" value="plein" alt="Submit Form" class="image1"/>
            <input type="submit" id="horizontal_item" name="remplissage" value="vitre" alt="Submit Form"  class="image2"/>
            </div></form>
        
		
	<footer>
        <button onclick="window.location.href='evidence_produit.php'">Précédent</button>
    </footer>
    </div>
    </body>


</html>