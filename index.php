
<!DOCTYPE html>
<?php //php -S localhost:8000 ?>
<?php

session_start();
$_SESSION["nom_entreprise"]="";
$_SESSION["nom_projet"]="";
$_SESSION["presentation"]="";
$_SESSION["fiche_technique"]="false";
$_SESSION["PV"]="false";

$servername = "bleuebenapdgacon.mysql.db"; // A Changer
$username = "bleuebenapdgacon";
$password = "CGJioYNyR7aPLhq";
$dbname  = "bleuebenapdgacon";

/*// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Création du dossier</title>
    </head>
    <style>
    #bienvenue{
        width: 100%;
        display: flex;
        flex-direction: row;
    }
    </style>
<body>

<div class="header">
    <a href="index.php"> <img src="ressources/mecanalu.png"> </a>
</div> 

<div id="content">

    <div id="bienvenue">
    <img src="ressources/logo.png" style="width:18%; height:12%;" />
    <p style="color:#a4bd0a; font-size:40px; padding-left:3%; padding-right:3%">BIENVENUE!</p>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>

    <h3> Création de votre projet DOE : </h3>
    
    <form action="produit.php" method="post">

    <div id="form">
    <p> Nom Entreprise : <input type="text" name="nom_entreprise" style="width:20%;"/> </p>
    <p> Nom Projet : <input type="text" name="nom_projet" style="width:20%;"/> </p>
    <p> Présentation :</p> <textarea rows = "5" cols = "60" name = "presentation"></textarea>
    <p><label for="scales">Fiches Techniques : </label>
        <input type="checkbox" name="fiche_technique"
            unchecked></p>
    <p><label for="scales">PV : </label>
        <input type="checkbox" name="PV"
            unchecked></p>
    <p><input type="submit" value="Choix de la gamme" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';"></p>
    </div>

    <div id="gamme">
        <input type="checkbox" id="evidence"  name="evidence" class="gamme" onclick="onlyOne(this)" checked />
        <label for="evidence"><img src="ressources/gamme_evidence.png" /></label>
        <input type="checkbox" id="boreale" name="boreale" class="gamme" onclick="onlyOne(this)"/>
        <label for="boreale"><img src="ressources/gamme_boreale.png" /></label>
        <input type="checkbox" id="evidence_box" name="evidence_box" class="gamme" onclick="onlyOne(this)"/>
        <label for="evidence_box"><img src="ressources/gamme_evidence_box.png" /></label>
    </div>
    </form> 
    <script>
    
    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByClassName("gamme");
        for (i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] !== checkbox) checkboxes[i].checked = false
        }
    }   
    </script>

</div>

</body>
</html>