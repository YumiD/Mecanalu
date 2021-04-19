<?php
    session_start();
    
    $remplissage = $_POST['remplissage'];
    $_SESSION["remplissage"] = $remplissage;

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

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            #wrapper {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 10px;
                grid-auto-rows: minmax(100px, auto);
            }
            #left{
                float:left;
                width:40%;
	            height: 50%;
                padding:2%;
            }
            #right{
                float:right;
                width:55%;
	            height: 50%;
            }
        </style>
    </head>

    <body>
    <div class="header">
        <a href="index.php"> <img src="ressources/mecanalu.png"> </a>
    </div> 

    <div id="content">
        <h3> <?php echo $nom_produit; ?> : </h3>
            <div id="left">
                <img id="image_produit" src="ressources/<?php echo $produit_final; ?>.png">
            </div>
            
            <div id="right">
            <form action="evidence_creation.php" method="post">
                <div>
                    <label for="hauteur">Hauteur :</label>
                    <input type="text" id="hauteur" name="hauteur">
                </div>
                <div>
                    <label for="ral">Ral :</label>
                    <select name="ral">
                        <option class="ral" value="null">Menu déroulant</option>
                    </select>
                </div>
                <div style="margin-top:30px"></div>
                <!-- PLEIN -->
                <div id=plein>
                    <div>
                        <label for="plein">Plein :</label>
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
                        <label for="fournisseur">Fournisseur :</label>
                        <select name="fournisseur">
                            <option class="fournisseur" value="null">Sélectionner</option>
                        </select>
                    </div>
                    <div>
                        <label for="pleinPV">Plein PV :</label>
                        <select name="pleinPV">
                            <option class="pleinPV" value="null">Sélectionner</option>
                        </select>
                    </div>
                </div>
                <!-- VITRE -->
                <div id=vitre>
                    <div>
                        <label for="concept">Concept :</label>
                        <select name="concept">
                            <option class="concept" value="null">Sélectionner</option>
                            <option class="e_cj" value="atelier">Verion Atelier</option>
                            <option class="e_cj" value="air">Verion Air</option>
                            <option class="e_bb" value="standard">Standard</option>
                            <option class="e_bb" value="air">Verion Air</option>
                        </select>
                    </div>
                    <div>
                        <label for="vitre">Vitré :</label>
                        <select name="vitre">
                            <option class="vitre" value="null">Sélectionner</option>
                        </select>
                    </div>
                    <div>
                        <label for="vitrePV">Vitré PV :</label>
                        <select name="vitrePV">
                            <option class="vitrePV" value="null">Sélectionner</option>
                        </select>
                    </div>
                    <div>
                        <label for="finition_vitre">Finition Vitré :</label>
                        <select name="finition_vitre">
                            <option class="finition_vitre" value="null">Sélectionner</option>
                            <option class="e_cj" value="trempe">Trempé</option>
                            <option class="e_cj" value="feuillete">Feuilleté</option>
                            <option class="e_cj" value="clir">Clair</option>
                            <option class="e_bb" value="trempe">Trempé</option>
                            <option class="e_bb" value="feuillete">Feuilleté</option>
                        </select>
                    </div>
                </div>
                <div style="margin-top:30px"></div>
                <input type="submit" value="Suivant">
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
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='evidence_remplissage.php'">Précédent</button>
    </footer>
</html>