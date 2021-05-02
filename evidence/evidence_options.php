<?php
    session_start();
    
    if(!empty($_POST['option']))
    {
        foreach($_POST['option'] as $option){
            if($option == "1") {    
                $accessoire = "accessoire_bequillage";
                $_SESSION["accessoire"] = $accessoire;
                $nom_accessoire="Béquillage";
            }
            else if($option == "2") {    
                $accessoire = "accessoire_paumelle";
                $_SESSION["accessoire"] = $accessoire;
                $nom_accessoire="Paumelles";
            }
            else if($option == "3") {    
                $accessoire = "accessoire_serrure";
                $_SESSION["accessoire"] = $accessoire;
                $nom_accessoire="Serrures";
            }
        }
        $_SESSION["accessoire"] = $accessoire;
        $_SESSION["nom_accessoire"] = $nom_accessoire;
    }

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Récapitulatif</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/option_store.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image2{
                border:none;
                background-image:url('../ressources/option_ecrimur.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image3{
                border:none;
                background-image:url('../ressources/option_cintrage.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
        </style>
    </head>
    
    <body>
        <div class="header">
            <?php include('../includes/header_evidence.html'); ?>
        </div> 
        
        <div id="content">
            <h3> Choix des options</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal">
			<span class="legend3"> Store </span>
			<span class="legend3"> Ecrimur </span>
			<span class="legend3"> Cintrage </span>
            
            <form action="evidence_options_formulaire.php" method="post">
                <input type="submit" id="horizontal_item" name="option" value="option_store" alt="Submit Form" class="image1"/>
                <input type="submit" id="horizontal_item" name="option" value="option_ecrimur" alt="Submit Form"  class="image2"/>
                <input type="submit" id="horizontal_item" name="option" value="option_cintrage" alt="Submit Form"  class="image3"/>
            </form></div>
        </div>

    </body>

    <footer>
        <button id="buttonPasser" onclick="window.location.href='../ajout.php'">Passer</button>
    </footer>
</html>