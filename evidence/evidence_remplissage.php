<?php
    session_start();

    $evidence_produit = $_SESSION['buffer_evidence_produit'][$_SESSION["buffer_evidence_produit_index"]];

    if($evidence_produit=="e_cj"){
        $nom_produit="Couvre joint";
    }
    else if($evidence_produit=="e_bb"){
        $nom_produit="Bord à Bord";
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
        <h3> EVIDENCE - <?php echo $nom_produit; ?> - remplissage</h3>
        
            <div id="image_produit">
                <img class="image_produit" src="../ressources/<?php echo $evidence_produit; ?>.png">
            </div>
            <div class="horizontal_remplissage" id="horizontal"> 
            <p></p>
            <p></p>
            <h4> Choisissez entre </h4>  
			<span class="legend2"> Plein </span>
			<span class="legend2"> Vitré </span>		
			<span class="legend2"> Vitré sur allège </span>

            <form action="../buffer/buffer_evidence_remplissage.php" method="post">

                <div id="checkboxRemplissage"> 
                <input type="checkbox" id="e_plein"  name="e_plein" class="evidence_remplissage"/>
                <label for="e_plein"><img src="../ressources/plein.png" /></label>
                <input type="checkbox" id="e_vitre" name="e_vitre" class="evidence_remplissage"/>
                <label for="e_vitre"><img src="../ressources/vitre.png" /></label>
                <input type="checkbox" id="e_vitre_allege" name="e_vitre_allege" class="evidence_remplissage"/>
                <label for="e_vitre_allege"><img src="../ressources/vitre_allege.png" /></label>
                </div>
            </div>
            
            <div id="form">
            <p><input type="submit" value="Continuer" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';"></p>
            </div>
            
            </form>

        
		
	<footer>
        <form action="../buffer/buffer_evidence_remplissage.php" method="post">
            <div id="form">
                <input type="submit" name="previous" value="Précédent" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';">
            </div>
        </form>
    </footer>
    </div>
    </body>


</html>