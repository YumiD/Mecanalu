<?php
    session_start();
    
    if(!empty($_POST['produit'])) {    
        $produit = $_POST['produit'];
        $_SESSION["produit"] = $produit;
    }

    if($produit=="boreale_bb"){
        $nom_produit="Bord a Bord";
    }
    else if($produit=="boreale_verriere"){
        $nom_produit="Verriere";
    }
    $_SESSION["nom_produit"]=$nom_produit;

?>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../mecanalu.css" />
    <title>Création du dossier</title>

    <style>
        #wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            grid-auto-rows: minmax(100px, auto);
        }
        #left{
            float: left;
			max-width: 500px;
			width: 100%;
			padding: 0%;
        }
        #right{
            float: left;
			max-width: 400px;
			width: 100%;
			margin-left: 5%;
        }
    </style>
</head>

    <body id="page">

	<div class="header">
        <?php include('../includes/header_evidence.html'); ?>
	</div>
		
	</div> 

    <div id="content" style="height:75%;">
        <h3> BOREALE  SELECTIONNEZ VOS FINITIONS - <?php echo $nom_produit; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $produit; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="boreale_portes.php" method="post">
                <!-- HAUTEUR -->
                <div>
                    <label class="label" for="hauteur">Hauteur :</label>
                    <input type="text" id="hauteur" name="hauteur">
                </div>
                <!-- RAL -->
                <div>
                    <label class="label" for="ral">Ral :</label>
                    <select name="ral">
                        <option class="ral" value="null">Menu déroulant</option>
                        <option class="ral" value="9010">9010 Blanc </option>
                        <option class="ral" value="9005">9005 Noir </option>
                        <option class="ral" value="9006">9006 Gris </option>
                        <option class="ral" value="9007">9007 Gris aluminium </option>
                        <option class="ral" value="7005">7005 Gris souris </option>
                        <option class="ral" value="7016">7016 Gris anthracite</option>
                    </select>
                    <label class="label" for="ral_autre"></label>
                    <input type="text" id="ral_autre" name="ral_autre" placeholder="Autre :">
                </div>
                <div style="margin-top:30px"></div>
                <!-- VITRE -->
                <div>
                    <label class="label" for="vitre">Vitré :</label>
                    <select name="vitre">
                        <option class="vitre" value="null">Sélectionner</option>
                        <option class="vitre" value="1">10 mm Trempé </option>
                        <option class="vitre" value="2">12 mm Trempé </option>
                        <option class="vitre" value="3">15 mm Trempé </option>
                        <option class="vitre" value="4">55,2 feuilleté </option>
                        <option class="vitre" value="5">55,2 silence feuilleté </option>
                        <option class="vitre" value="6">66,2 feuilleté</option>
                        <option class="vitre" value="7">66,2 silence feuilleté </option>
                    </select>
                </div>
                <!-- FINITION VITRE -->
                <div style="display: flex;flex-wrap: wrap;">
                    <label class="label" for="finition_vitre">Finition Vitré :</label>
                    <div id="finition_vitre">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">
                            <li class="trempe">
                                <label for="trempe">Trempé</label>
                                <input class="check" type="checkbox" id="trempe" name="finition_vitre">
                            </li>
                            <li class="feuillete">
                                <label for="clair">Feuilleté</label>
                                <input class="check" type="checkbox" id="feuillete" name="finition_vitre">
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="margin-top:30px"></div>
                <div id="submitButton"> <input type="submit" value="Suivant"> </div>
            </form>
            </div>

            <script type="text/javascript">
                function SetVisible(id){
                    var elements = document.getElementsByClassName(id);
                    for(var i=0; i<elements.length; i++) {
                        elements[i].hidden = false;
                    }
                }
            </script>
			
			<footer>
			<button onclick="window.location.href='boreale_produit.php'">Précédent</button>
			</footer>
    </div>
</body>

</html>