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
        <h3> EVIDENCE BOX - SELECTIONNEZ VOS FINITIONS - <?php echo $nom_produit; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $produit; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="evidence_box_portes.php" method="post">
                <!-- FOURNISSEUR -->
                <div>
                    <label class="label" for="fournisseur_box">Fournisseur :</label>
                    <select name="fournisseur_box">
                        <option class="fournisseur_box" value="null">Sélectionner</option>
                        <option class="fournisseur_box" value="1">EGGER</option>
                        <option class="fournisseur_box" value="2">POLYREY</option>
                        <option class="fournisseur_box" value="3">UNILIN</option>
                    </select>
                </div>
                <!-- PV -->
                <div>
                    <label class="label" for="PV_box">PV :</label>
                    <select name="PV_box">
                        <option class="PV_box" value="null">Sélectionner</option>
                        <option hidden class="PV_box_melamine" value="1">2 faces mélaminé de 12 mm + EPDM 5 kg : Ra=42 dB / Rw = 46 dB</option>
                        <option hidden class="PV_box_vitre" value="2">6+ 8 mm  : Ra = 41 dB / Rw = 42  dB</option>
                        <option hidden class="PV_box_vitre" value="3">10+ 12 mm  : Ra = 42 dB / Rw = 43 dB</option>
                    </select>
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
                var remplissage = <?php echo json_encode($option); ?>;
                if(remplissage=="melamine"){
                    SetVisible("PV_box_melamine");
                }
                if(remplissage=="vitre"){
                    SetVisible("PV_box_vitre");
                }
            </script>
			
			<footer>
			<button onclick="window.location.href='evidence_box_remplissage.php'">Précédent</button>
			</footer>
    </div>
</body>

</html>