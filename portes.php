<?php
  session_start();
    $_SESSION["buffer_portes_size"] = 0;
    $_SESSION["buffer_portes_index"] = 0;
    $_SESSION['buffer_portes'] = array();

    $_SESSION["porte_pleine"] = false;
    $_SESSION["porte_vitre"] = false;
    $_SESSION["porte_coulissante"] = false;
    $_SESSION["porte_bi_cadreAluminium"] = false;
    $_SESSION["porte_bi_bois"] = false;

    $_SESSION["accessoire_bequillage"] = false;
    $_SESSION["accessoire_paumelle_visibles"] = false;
    $_SESSION["accessoire_paumelle_invisibles"] = false;
    $_SESSION["accessoire_serrure_standard"] = false;
    $_SESSION["accessoire_serrure_magnetique"] = false;
    $_SESSION["accessoire_oculus"] = false;
    $_SESSION["ferme_porte_visible"] = false;
    $_SESSION["ferme_porte_invisible"] = false;

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Mecanalu - Choix Porte</title>
        
    </head>
    
<body id="page">

	<div class="header">
        <?php include('includes/header.html'); ?>
	</div> 
        
        <div id="content">
            <h3>CHOIX PORTE</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal"> 
                <span class="legend3"> Bi-Affleurante </span>
                <span class="legend3"> Pleine </span>
                <span class="legend3"> Vitré </span>
                <span class="legend3"> Coulissante </span>
                
                <form action="buffer/buffer_portes.php" method="post">
                <div id="checkboxPortes">
                    <input type="checkbox" id="porte_bi"  name="porte_bi" class="porte"/>
                    <label for="porte_bi"><img src="ressources/porte_bi.png" /></label>
                    <input type="checkbox" id="porte_pleine" name="porte_pleine" class="porte"/>
                    <label for="porte_pleine"><img src="ressources/porte_pleine.png" /></label>
                    <input type="checkbox" id="porte_vitre" name="porte_vitre" class="porte"/>
                    <label for="porte_vitre"><img src="ressources/porte_vitre.png" /></label>
                    <input type="checkbox" id="porte_coulissante" name="porte_coulissante" class="porte"/>
                    <label for="porte_coulissante"><img src="ressources/porte_coulissante.png" /></label>
                </div>

			</div>

            <div id="form">
            <input type="submit" value="Continuer" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';">
            </div>

        </div>

    </body>

    <footer>
        <!--<button onclick="window.location.href='evidence_finition.php'">Précédent</button>-->
    </footer>
</html>