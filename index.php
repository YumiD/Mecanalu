
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
        #form #nom_entreprise_image, #nom_projet_image
        {
            display: none;
        }
        #form label img
        {
            width: 20px;
            cursor: pointer;
        }
    </style>
<body id="page">

<div class="header">
    <p class="top"><a href="index.php"> <img src="ressources/mecanalu.png"> </a></p>
	
	<div id="menu"><ul>
	<li><a href="https://www.mecanalu.com/">Accueil</a></li>
	<li><a href="https://www.mecanalu.com/produits">Produits</a></li>
	<li><a href="https://www.mecanalu.com/ambiances">Ambiances</a></li>
	<li><a href="https://www.mecanalu.com/societe">Société</a></li>
	<li><a href="https://www.mecanalu.com/catalogues">Catalogues</a></li>
	<li><a href="https://www.mecanalu.com/contact">Contact</a></li>
	<li><a href="http://dev.mecanalu.com/auth/login" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;">Portail Client</a></li>
	</ul>
	</div>
	
</div> 

<div id="content">

    <div id="bienvenue">
    <img src="ressources/icon/icon_mecanalu.png" />
    <p class="title">BIENVENUE !</p>
    <p class="intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>

    <h2> Création de votre projet DOE : </h2>
    
    <form action="produit.php" method="post">

    <div id="form">
    <p> <span class="label"> Nom Entreprise : </span> <input type="text" name="nom_entreprise" style="width:20%;"/>
    <label for="nom_entreprise_image"> <img src="ressources/icon/icon_photo.png"/>  <input type="file" name="nom_entreprise_image" id="nom_entreprise_image"> </label> </p>
    <p> <span class="label"> Nom Projet : </span> <input type="text" name="nom_projet" style="width:20%;"/> 
    <label for="nom_entreprise_image"> <img src="ressources/icon/icon_photo.png"/> <input type="file"  name="nom_projet_image" id="nom_projet_image"> </label> </p>

    <p> <span class="label">Présentation du projet:</span> <textarea  rows = "5" cols = "60" name = "presentation"></textarea></p>
    <p><label class="label" for="scales">Fiches Techniques : </label>
        <input type="checkbox" name="fiche_technique" class="check"
            unchecked></p>
    <p><label class="label" for="scales">PV : </label>
        <input type="checkbox" name="PV" class="check"
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