
<!DOCTYPE html>
<?php //php -S localhost:8000 ?>
<?php

//session_start();
session_reset();
$_SESSION["nom_entreprise"]="";
$_SESSION["nom_projet"]="";
$_SESSION["presentation"]="";
// $_SESSION["nom_entreprise_image"]="";
// $_SESSION["nom_projet_image"]="";
$_SESSION["fiche_technique"]=false;
$_SESSION["PV"]=false;

$servername = "bleuebenapdgacon.mysql.db"; // A Changer
$username = "bleuebenapdgacon";
$password = "CGJioYNyR7aPLhq";
$dbname  = "bleuebenapdgacon";

$_SESSION['buffer_gamme'] = array();
//Evidence
$_SESSION['buffer_evidence_produit']=array();
$_SESSION['buffer_evidence_remplissage'] = array();
$_SESSION['buffer_evidence_finition']=array();
//Boreale
$_SESSION['buffer_boreale_produit']=array();
$_SESSION['buffer_boreale_finition']=array();
//Evidence Box
$_SESSION['buffer_evidence_box_produit']=array();
$_SESSION['buffer_evidence_box_remplissage'] = array();
$_SESSION['buffer_evidence_box_finition']=array();
//Porte
$_SESSION['buffer_portes'] = array();
//Option
$_SESSION["option"]="";

//Suppression de tous les fichiers contenues dans zip_fiches_techniques/
$files2delete = glob('zip_fiches_techniques/*'); 
foreach($files2delete as $file2delete) {
    if(is_file($file2delete)) 
        unlink($file2delete); 
}
$files2delete = glob('zip_fiches_techniques/PV/*'); 
foreach($files2delete as $file2delete) {
    if(is_file($file2delete)) 
        unlink($file2delete); 
}
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
        <title>Mecanalu - Création du dossier</title>
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
    <?php include('includes/header.html'); ?>
</div> 

<div id="content">

    <div id="bienvenue">
    <img src="ressources/icon/icon_mecanalu.png" />
    <p class="title">BIENVENUE !</p>
    <p class="intro">Bienvenue dans le DOE digitalisé ! Nous valorisons le partage d’information en vous donnant accès à toutes les pièces complémentaires qui vous sont utiles lors de la création de vos DOE. Cet outil vous permettra en quelques clics de créer vos descriptifs et fiches techniques correspondant à votre projet. Vos chantiers de A à Z !</p>
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
    </div>

    <div id="checkbox">
        <input type="checkbox" id="evidence"  name="evidence" class="gamme"/>
        <label for="evidence"><img src="ressources/gamme_evidence.png" /></label>
        <input type="checkbox" id="boreale" name="boreale" class="gamme"/>
        <label for="boreale"><img src="ressources/gamme_boreale.png" /></label>
        <input type="checkbox" id="evidence_box" name="evidence_box" class="gamme"/>
        <label for="evidence_box"><img src="ressources/gamme_evidence_box.png" /></label>
    </div>

    <div id="form">
        <p><input type="submit" value="Continuer" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';"></p>
    </div>

    </form> 

</div>

</body>
</html>