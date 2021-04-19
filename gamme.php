<?php
    session_start();
    
    if(!empty($_POST['nom_entreprise'])) {    
        $nom_entreprise = $_POST['nom_entreprise'];
        $_SESSION["nom_entreprise"] = $nom_entreprise;
    }
    else $nom_entreprise=$_SESSION["nom_entreprise"];
    if(!empty($_POST['nom_projet'])) {    
        $nom_projet = $_POST['nom_projet'];
        $_SESSION["nom_projet"] = $nom_projet;
    }
    else $nom_projet=$_SESSION["nom_projet"];
    if(!empty($_POST['presentation'])) {    
        $presentation = $_POST['presentation'];
        $_SESSION["presentation"] = $presentation;
    }
    else $presentation=$_SESSION["presentation"];

    if(isset($_POST['fiche_technique']))
        $_SESSION["fiche_technique"] = "true";
    else
        $_SESSION["fiche_technique"] = "false";
    if(isset($_POST['PV']))
        $_SESSION["PV"] = "true";
    else
        $_SESSION["PV"] = "false";

    $_SESSION["gamme"]=""; 
    if(isset($_POST['evidence']))
        $_SESSION["gamme"] = "evidence";
    else if(isset($_POST['boreale']))
        $_SESSION["gamme"] = "boreale";
    else if(isset($_POST['evidence_box']))
        $_SESSION["gamme"] = "evidence_box";

    echo $_SESSION["gamme"];

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/gamme_evidence.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image2{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/gamme_boreale.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image3{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/gamme_evidence_box.png');
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
        <a href="index.php"> <img src="ressources/mecanalu.png"> </a>
    </div> 

    <div id="content">
        <h3> Choix de la gamme: </h3>

        <div id="horizontal"> <form action="produit.php" method="post">
        <input type="submit" src="ressources/gamme_evidence.png" id="horizontal_item" name="gamme" value="evidence" alt="Submit Form" class="image1"/>
        <input type="submit" src="ressources/gamme_boreale.png" id="horizontal_item" name="gamme" value="boreale" alt="Submit Form"  class="image2"/>
        <input type="submit" src="ressources/gamme_evidence_box.png" id="horizontal_item" name="gamme" value="evidence_box" alt="Submit Form"  class="image3"/>
        </form> </div>
    </div>
    </body>

    <footer>
        <button onclick="window.location.href='index.php'">Précédent</button>
    </footer>
</html>