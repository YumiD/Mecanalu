<?php
    session_start();
    
    if(!empty($_POST['remplissage'])) {    
        $remplissage = $_POST['remplissage'];
        $_SESSION["remplissage"] = $remplissage;
    }
    
    $remplissage = $_SESSION['remplissage'];

    $produit = $_SESSION['produit'];

    if($produit=="e_cj"){
        if($remplissage=="plein"){
            $nom_produit="Couvre joint Plein";
            $produit_final="e_cj_p";
            $_SESSION["produit_evidence"]="E_CJ_plein";
        }else if($remplissage=="vitre"){
            $nom_produit="Couvre joint Vitré";
            $produit_final="e_cj_v";
            $_SESSION["produit_evidence"]="E_CJ_vitre";
        }
    }
    else if($produit=="e_bb"){
        if($remplissage=="plein"){
            $nom_produit="Bord à Bord Plein";
            $produit_final="e_bb_p";
            $_SESSION["produit_evidence"]="E_BB_plein";
        }else if($remplissage=="vitre"){
            $nom_produit="Bord à Bord Vitré";
            $produit_final="e_bb_v";
            $_SESSION["produit_evidence"]="E_BB_vitre";
        }
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
		<p class="top"><a href="index.php"> <img src="../ressources/mecanalu.png"> </a></p>
		
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

    <div id="content" style="height:75%;">
        <h3> EVIDENCE SELECTIONNEZ VOS FINITIONS - <?php echo $nom_produit; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $produit_final; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="evidence_portes.php" method="post">
                <div>
                    <label class="label" for="hauteur">Hauteur :</label>
                    <input type="text" id="hauteur" name="hauteur">
                </div>
                <div>
                    <label class="label" for="ral">Ral :</label>
                    <select name="ral">
                        <option class="ral" value="null">Menu déroulant</option>
                    </select>
                </div>
                <div style="margin-top:30px"></div>
                <!-- PLEIN -->
                <div id="plein">
                    <div>
                        <label class="label" for="plein">Plein :</label>
                        <select name="plein">
                            <option class="plein" value="null">Sélectionner</option>
                            <option class="e_cj" value="melamine">Mélaminé</option>
                            <option class="e_cj" value="tole">Tôlé</option>
                            <option class="e_cj" value="revetu">Revêtu</option>
                            <option class="e_bb" value="melamine">Mélaminé</option>
                            <option class="e_bb" value="tole">Tôlé</option>
                        </select>
                    </div>
                    <div>
                        <label class="label" for="fournisseur">Fournisseur :</label>
                        <select name="fournisseur">
                            <option class="fournisseur" value="null">Sélectionner</option>
                        </select>
                    </div>
                    <div>
                        <label class="label" for="pleinPV">Plein PV :</label>
                        <select name="pleinPV">
                            <option class="pleinPV" value="null">Sélectionner</option>
                        </select>
                    </div>
                </div>
                <!-- VITRE -->
                <div id=vitre>
                    <div style="display: flex;flex-wrap: wrap;">
                        <label class="label" for="concept">Concept :</label>
                        <div id="concept">
                        </div>
                        <div>
                            <ul style="list-style-type: none;">        
                                <li class="e_cj">
                                    <input class="check" type="checkbox" id="atelier" name="concept" checked>
                                    <label for="atelier">Version Atelier</label>
                                </li>
                                <li class="e_cj">
                                    <input class="check" type="checkbox" id="air" name="concept">
                                    <label for="air">Version Air</label>
                                </li>
                                <li class="e_bb">
                                    <input type="checkbox" id="standard" name="concept">
                                    <label for="standard">Standard</label>
                                </li>
                                <li class="e_bb">
                                    <input type="checkbox" id="air" name="concept">
                                    <label for="air">Version Air</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <label class="label" for="vitre">Vitré :</label>
                        <select name="vitre">
                            <option class="vitre" value="null">Sélectionner</option>
                        </select>
                    </div>
                    <div>
                        <label class="label" for="vitrePV">Vitré PV :</label>
                        <select name="vitrePV">
                            <option class="vitrePV" value="null">Sélectionner</option>
                        </select>
                    </div>
                    <div style="display: flex;flex-wrap: wrap;">
                        <label class="label" for="finition_vitre">Finition Vitré :</label>
                        <div id="finition_vitre">
                        </div>
                        <div>
                            <ul style="list-style-type: none;">        
                                <li class="e_cj">
                                    <input class="check" type="checkbox" id="trempe" name="finition_vitre" checked>
                                    <label for="trempe">Trempé</label>
                                </li>
                                <li class="e_cj">
                                    <input class="check" type="checkbox" id="feuillete" name="finition_vitre">
                                    <label for="feuillete">Feuilleté</label>
                                </li>
                                <li class="e_bb">
                                    <input class="check" type="checkbox" id="clair" name="finition_vitre">
                                    <label for="clair">Clair</label>
                                </li>
                                <li class="e_bb">
                                    <input class="check" type="checkbox" id="trempe" name="finition_vitre">
                                    <label for="trempe">Trempé</label>
                                </li>
                                <li class="e_bb">
                                    <input class="check" type="checkbox" id="feuillete" name="finition_vitre">
                                    <label for="feuillete">Feuilleté</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="margin-top:30px"></div>
                <div id="submitButton"> <input type="submit" value="Suivant"> </div>
            </form>
            </div>

            <script type="text/javascript">
                var remplissage = <?php echo json_encode($remplissage); ?>;
                var produit = <?php echo json_encode($produit); ?>;
                if(remplissage=="plein"){
                    document.getElementById("vitre").style.display = "none";
                }
                else if(remplissage=="vitre"){
                    document.getElementById("plein").style.display = "none";
                }
                if(produit=="e_cj"){
                    var elements = document.getElementsByClassName("e_bb");
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                }
                else if(produit=="e_bb"){
                    var elements = document.getElementsByClassName("e_cj");
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                }
            </script>
			
			<footer>
			<button onclick="window.location.href='evidence_remplissage.php'">Précédent</button>
			</footer>
    </div>
</body>

</html>