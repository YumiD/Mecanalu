<?php
    session_start();
    
    if(!empty($_POST['remplissage'])) {    
        $remplissage = $_POST['remplissage'];
        $_SESSION["remplissage"] = $remplissage;
    }
    
    $remplissage = $_SESSION['remplissage'];

    $produit = $_SESSION['produit'];
    $nom_produit = $_SESSION['nom_produit'];

?>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../mecanalu.css" />
    <title>Mecanalu - Finition</title>

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
        <h3> EVIDENCE BOX - SELECTIONNEZ VOS FINITIONS - <?php echo $nom_produit; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $produit; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="../ajout.php" method="post">
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
                <!-- Face Pleine -->
                <div>
                    <label class="label" for="face_plein">Face Pleine :</label>
                    <select name="face_plein">
                        <option class="face_plein" value="null">Sélectionner</option>
                        <option class="face_plein" value="1">Mélaminé EGGER</option>
                        <option class="face_plein" value="2">Mélaminé Unilin</option>
                        <option class="face_plein" value="3">Mélaminé Polyrey</option>
                    </select>
                </div>
                <!-- Face Vitrée -->
                <div style="display: flex;flex-wrap: wrap;">
                    <label class="label" for="face_vitre"> Face Vitrée :</label>
                    <div id="face_vitre">
                    </div>
                    <div>
                        <p hidden class="6+8"> 6 + 8 Trempé </p>
                        <p hidden class="10+12"> 10 + 12 Trempé </p>
                    </div>
                </div>
                <!-- Option -->
                <div style="display: flex;flex-wrap: wrap;">
                    <label class="label" for="option"> Option :</label>
                    <div id="option">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">
                            <li class="ecrimur">
                                <label for="ecrimur">Ecrimur</label>
                                <input class="check" type="checkbox" id="ecrimur" name="option">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Porte -->
                <div style="display: flex;flex-wrap: wrap;">
                    <label class="label" for="porte"> Porte :</label>
                    <div id="porte">
                    </div>
                    <div>
                        <p>Bi-affleurante cadre aluminium</p>
                        <p>Poigne magnétique</p>
                        <p>Paumelles Invisibles</p>
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
                var produit = <?php echo json_encode($produit); ?>;
                if(produit=="box_little"){
                    SetVisible("6+8");
                }
                else{
                    SetVisible("10+12");
                }
            </script>
			
			<footer>
			<button onclick="window.location.href='evidence_box_remplissage.php'">Précédent</button>
			</footer>
    </div>
</body>

</html>