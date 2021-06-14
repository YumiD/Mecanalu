<?php
    session_start();

    $produit = $_SESSION['buffer_evidence_box_produit'][$_SESSION["buffer_evidence_box_produit_index"]];
    

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
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Mecanalu - Remplissage</title>
    </head>

    <body id="page">
    <div class="header">
        <?php include('../includes/header_evidence.html'); ?>
	</div>
	
	</div>  

    <div id="content">
        <h3> EVIDENCE BOX - remplissage - <?php echo $nom_produit; ?> </h3>

        <form action="../buffer/buffer_evidence_box_remplissage.php" method="post">

        <div id="horizontal"> 
            <h4> Choisissez entre </h4>  
            <span class="legend5"> 3 faces pleines (standard) </span>
            <span class="legend5"> 2 faces pleines + 1 côté vitré </span>	
            <span class="legend5"> Fond plein + 2 côté vitré </span>	
            <span class="legend5"> 2 côtés pleins "en tunnel" + fond vitré </span>
            
            <div id="checkbox">
            <input type="checkbox" id="box_remplissage_1" name="box_remplissage_1" class="evidence_box_remplissage"/>
            <label for="box_remplissage_1"><img src="../ressources/box_remplissage_1.png" /></label>
            <input type="checkbox" id="box_remplissage_2" name="box_remplissage_2" class="evidence_box_remplissage"/>
            <label for="box_remplissage_2"><img src="../ressources/box_remplissage_2.png" /></label>
            <input type="checkbox" id="box_remplissage_3" name="box_remplissage_3" class="evidence_box_remplissage"/>
            <label for="box_remplissage_3"><img src="../ressources/box_remplissage_3.png" /></label>
            <input type="checkbox" id="box_remplissage_4" name="box_remplissage_4" class="evidence_box_remplissage"/>
            <label for="box_remplissage_4"><img src="../ressources/box_remplissage_4.png" /></label>
            </div>
        </div>

        <div id="form">
        <p><input type="submit" value="Continuer" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';"></p>
        </div>

        </form>
        
		
	<footer>
        <form action="../buffer/buffer_evidence_box_remplissage.php" method="post">
            <div id="form">
                <input type="submit" name="previous" value="Précédent" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';">
            </div>
        </form>
    </footer>
    </div>
    </body>


</html>