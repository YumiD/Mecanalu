
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
<body>

<div class="header">
    <img src="ressources/mecanalu.png">
</div> 

<div id="content">
    <h3> Création du dossier : </h3>
    
    <div id="form"><form action="gamme.php" method="post">
    <p> Ecrivez le nom de votre entreprise : <input type="text" name="nom_entreprise" /> </p>
    <p> Ecrivez le nom du projet : <input type="text" name="nom_projet" /> </p>
    <p> Présentation : <input type="text" name="presentation" /> </p>
    <p><label for="scales">Fiches Techniques : </label>
        <input type="checkbox" id="scales" name="fiche_technique"
            unchecked></p>
    <p><label for="scales">PV : </label>
        <input type="checkbox" id="scales" name="PV"
            unchecked></p>
    <p><input type="submit" value="Suivant"></p>
    </form> </div>
</div>


</body>
</html>