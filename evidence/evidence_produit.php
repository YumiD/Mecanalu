<?php
    session_start();
    $_SESSION["buffer_evidence_produit_size"] = 0;
    $_SESSION["e_cj"] = false;
    $_SESSION["e_bb"] = false;
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
        <h3> Evidence : Choix de la finition</h3>
        <h4> Plusieurs choix possibles <h4>
        <form action="../buffer/buffer_evidence_produit.php" method="post">

        <div id="horizontal"> 
            <span class="legend3"> Couvre-joint </span>
            <span class="legend3"> Bord à Bord </span>
            
            <div id="checkbox">
            <input type="checkbox" id="e_cj"  name="e_cj" class="evidence_produit"/>
            <label for="e_cj"><img src="../ressources/e_cj.png" /></label>
            <input type="checkbox" id="e_bb" name="e_bb" class="evidence_produit"/>
            <label for="e_bb"><img src="../ressources/e_bb.png" /></label>
            </div>
		</div>
        
        <div id="form">
        <p><input type="submit" value="Continuer" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';"></p>
		</div>

        </form>

	<footer>
       <button onclick="window.location.href='../index.php'">Précédent</button>
    </footer>
	
    </div>

    </body>

    
</html>