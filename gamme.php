<?php
    session_start();
    
    $nom_entreprise = $_POST['nom_entreprise'];
    $nom_projet = $_POST['nom_projet'];
    $presentation = $_POST['presentation'];
    
    $_SESSION["nom_entreprise"] = $nom_entreprise;
    $_SESSION["nom_projet"] = $nom_projet;
    $_SESSION["presentation"] = $presentation;
    
    if(isset($_POST['fiche_technique']))
        $_SESSION["fiche_technique"] = "true";
    else
        $_SESSION["fiche_technique"] = "false";
    if(isset($_POST['PV']))
        $_SESSION["PV"] = "true";
    else
        $_SESSION["PV"] = "false";

    $_SESSION["gamme"]=""; 

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
        <img src="ressources/mecanalu.png">
    </div> 

    <div id="content">
        <h3> Choix de la gamme: </h3>
        <!--
        <script> function onlyOne(checkbox) {
            var checkboxes = document.getElementsByName('check')
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false
            })
            var gamme = checkbox.id;
            console.log(gamme);
            <?php //$_SESSION["gamme"]= '<script>document.write(gamme)</script>'; ?>
            }
        </script>
        <div id="form"><form action="produit.php" method="post">
        <label> Evidence <input type="checkbox" id="evidence" name="check" onclick="onlyOne(this)"> </label>
        <label> Boréale <input type="checkbox" id="boreale" name="check" onclick="onlyOne(this)"> </label>
        <label> Evidence Box<input type="checkbox" id="evidence_box" name="check" onclick="onlyOne(this)"> </label>
        <p><input type="submit" value="Suivant"> </p>
        </form> </div>
        -->

        <div id="horizontal"> <form action="produit.php" method="post">
        <input type="submit" src="ressources/gamme_evidence.png" id="horizontal_item" name="gamme" value="evidence" alt="Submit Form" class="image1"/>
        <input type="submit" src="ressources/gamme_boreale.png" id="horizontal_item" name="gamme" value="boreale" alt="Submit Form"  class="image2"/>
        <input type="submit" src="ressources/gamme_evidence_box.png" id="horizontal_item" name="gamme" value="evidence_box" alt="Submit Form"  class="image3"/>
        </form> </div>
    </div>
    </body>
</html>