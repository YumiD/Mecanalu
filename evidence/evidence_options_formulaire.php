<?php
    session_start();

    if(!empty($_POST['option'])) {    
        $option = $_POST['option'];
        $_SESSION["option"] = $option;
    }
    else $option=$_SESSION["option"];

    if($option=="option_store"){
        $nom_option="Store";
    }
    else if($option=="option_ecrimur"){
        $nom_option="Ecrimur";
    }
    else if($option=="option_cintrage"){
        $nom_option="Cintrage";
    }
    $_SESSION["nom_option"] = $nom_option;

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
        <?php include('../includes/header.html'); ?>
    </div> 

    <div id="content" style="height:75%;">
        <h3> EVIDENCE - OPTIONS - <?php echo $nom_option; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $option; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="../portes_accessoires.php" method="post">
                <!-- DIMENSION -->
                <div id="dimension">
                    <label for="dimension">Dimension :</label>
                    <input type="text" id="dimension" name="dimension">
                </div>
                <!-- RAYON DE CINTRAGE -->
                <div id="rayon_cintrage">
                    <label for="rayon_cintrage">Rayon de cintrage :</label>
                    <input type="text" id="rayon_cintrage" name="rayon_cintrage">
                </div>
                <!-- COULEUR -->
                <div id="couleur">
                    <label for="couleur">Couleur :</label>
                    <select name="couleur">
                        <option class="couleur" value="null">Menu déroulant</option>
                    </select>
                </div>
                <!-- RAL -->
                <div id="ral">
                    <label for="ral">RAL :</label>
                    <select name="ral">
                        <option class="ral" value="null">Menu déroulant</option>
                    </select>
                </div>
                <!-- FINITION -->
                <div id="finition" style="display: flex;flex-wrap: wrap;">
                    <label for="finition">Finition :</label>
                    <div id="finition">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="manuel">
                                <input type="checkbox" id="manuel" name="finition" checked>
                                <label for="manuel">Manuel</label>
                            </li>
                            <li class="electrique">
                                <input type="checkbox" id="electrique" name="finition">
                                <label for="electrique">Electrique</label>
                            </li>
                            <li class="vitre">
                                <input type="checkbox" id="vitre" name="finition">
                                <label for="vitre">Vitré</label>
                            </li>
                            <li class="stratifie">
                                <input type="checkbox" id="stratifie" name="finition">
                                <label for="stratifie">Stratifié</label>
                            </li>
                            <li class="vinylique">
                                <input type="checkbox" id="vinylique" name="finition">
                                <label for="vinylique">Vinylique</label>
                            </li>
                            <li class="dv">
                                <input type="checkbox" id="dv" name="finition">
                                <label for="dv">DV</label>
                            </li>
                            <li class="sv">
                                <input type="checkbox" id="sv" name="finition">
                                <label for="sv">SV</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- FOURNISSEUR -->
                <div id="fournisseur" style="display: flex;flex-wrap: wrap;">
                    <label for="fournisseur">Fournisseur :</label>
                    <div id="fournisseur">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="mecanalu">
                                <input type="checkbox" id="mecanalu" name="fournisseur" checked>
                                <label for="mecanalu">Mecanalu</label>
                            </li>
                            <li class="pannex">
                                <input type="checkbox" id="pannex" name="fournisseur">
                                <label for="pannex">Pannex</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- DOCUMENT TECHNIQUE -->
                <div id="doc_technique" style="display: flex;flex-wrap: wrap;">
                    <label for="doc_technique">Document Technique :</label>
                    <div id="doc_technique">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="oui">
                                <input type="checkbox" id="oui" name="doc_technique" checked>
                                <label for="oui">Oui</label>
                            </li>
                            <li class="non">
                                <input type="checkbox" id="non" name="doc_technique">
                                <label for="non">Non</label>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div style="margin-top:30px"></div>
                <div id="submitButton"> <input type="submit" value="Suivant"> </div>
            </form>
            </div>

            <script type="text/javascript">
                function DeleteByClass(id) {
                    var elements = document.getElementsByClassName(id);
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                }

                var option = <?php echo json_encode($option); ?>;
                if(option=="option_store"){
                    document.getElementById("rayon_cintrage").style.display = "none";
                    document.getElementById("ral").style.display = "none";
                    document.getElementById("fournisseur").style.display = "none";
                    DeleteByClass("vitre"); DeleteByClass("stratifie"); DeleteByClass("vinylique"); DeleteByClass("dv"); DeleteByClass("sv"); //Finition
                }
                else if(option=="option_ecrimur"){
                    document.getElementById("rayon_cintrage").style.display = "none";
                    document.getElementById("couleur").style.display = "none";
                    document.getElementById("ral").style.display = "none";
                    DeleteByClass("manuel"); DeleteByClass("electrique"); DeleteByClass("dv"); DeleteByClass("sv"); //Finition
                }
                else if(option=="option_cintrage"){
                    document.getElementById("dimension").style.display = "none";
                    document.getElementById("couleur").style.display = "none";
                    document.getElementById("fournisseur").style.display = "none";
                    document.getElementById("doc_technique").style.display = "none";
                    DeleteByClass("vitre"); DeleteByClass("stratifie"); DeleteByClass("vinylique"); DeleteByClass("manuel"); DeleteByClass("electrique"); //Finition
                }
            </script>
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='evidence_options.php'">Précédent</button>
    </footer>
</html>