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
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Mecanalu - Option</title>

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

    <body id="page">
    <div class="header">
        <?php include('includes/header.html'); ?>
    </div> 

    <div id="content" style="height:75%;">
        <h3> EVIDENCE - OPTIONS - <?php echo $nom_option; ?> </h3>
            <div id="left">
                <img id="image_produit" src="./ressources/<?php echo $option; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="ajout.php" method="post">
                <!-- DIMENSION -->
                <div id="dimension">
                    <label  class="label" for="dimension">Dimension :</label>
                    <input type="text" id="dimension" name="dimension">
                </div>
                <!-- RAYON DE CINTRAGE -->
                <div id="rayon_cintrage">
                    <label  class="label" for="rayon_cintrage">Rayon de cintrage :</label>
                    <input type="text" id="rayon_cintrage" name="rayon_cintrage">
                </div>
                <!-- COULEUR -->
                <div id="couleur">
                    <label  class="label" for="couleur">Couleur :</label>
                    <select name="couleur">
                        <option class="couleur" value="null">Menu déroulant</option>
                    </select>
                </div>
                <!-- RAL -->
                <div id="ral">
                    <label  class="label" for="ral">RAL :</label>
                    <select name="ral">
                        <option class="ral" value="null">Menu déroulant</option>
                        <option  class="ral" value="9010">9010 Blanc </option>
                        <option  class="ral" value="9005">9005 Noir </option>
                        <option  class="ral" value="9006">9006 Gris </option>
                        <option  class="ral" value="9007">9007 Gris aluminium </option>
                        <option  class="ral" value="7005">7005 Gris souris </option>
                        <option  class="ral" value="7016">7016 Gris anthracite</option>
                    </select>
                    <label  class="label"  for="ral_autre"></label>
                    <input type="text" id="ral_autre" name="ral_autre" placeholder="Autre :">
                </div>
                <!-- FINITION -->
                <div id="finition" style="display: flex;flex-wrap: wrap;">
                    <label  class="label" for="finition">Finition :</label>
                    <div id="finition">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="manuel">
                                <input class="check1" type="checkbox" id="manuel" name="finition[]" value="manuel" onclick="onlyOne(this, 'check1')">
                                <label  class="label" for="manuel">Manuel</label>
                            </li>
                            <li class="electrique">
                                <input class="check1" type="checkbox" id="electrique" name="finition[]" value="electrique" onclick="onlyOne(this, 'check1')">
                                <label  class="label" for="electrique">Electrique</label>
                            </li>
                            <li class="vitre">
                                <input class="check1" type="checkbox" id="vitre" name="finition[]" value="vitre" onclick="onlyOne(this, 'check1')">
                                <label  class="label" for="vitre">Vitré</label>
                            </li>
                            <li class="stratifie">
                                <input class="check1" type="checkbox" id="stratifie" name="finition[]" value="stratifie" onclick="onlyOne(this, 'check1')">
                                <label  class="label" for="stratifie">Stratifié</label>
                            </li>
                            <li class="vinylique">
                                <input class="check1" type="checkbox" id="vinylique" name="finition[]" value="vinylique" onclick="onlyOne(this, 'check1')">
                                <label  class="label" for="vinylique">Vinylique</label>
                            </li>
                            <li class="dv">
                                <input class="check1" type="checkbox" id="dv" name="finition[]" value="dv" onclick="onlyOne(this, 'check1')">
                                <label  class="label" for="dv">DV</label>
                            </li>
                            <li class="sv">
                                <input class="check1" type="checkbox" id="sv" name="finition[]" value="sv" onclick="onlyOne(this, 'check1')">
                                <label  class="label" for="sv">SV</label>
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
                                <input class="check2" type="checkbox" id="oui" name="doc_technique" onclick="onlyOne(this, 'check2')">
                                <label class="label" for="oui">Oui</label>
                            </li>
                            <li class="non">
                                <input class="check2" type="checkbox" id="non" name="doc_technique" onclick="onlyOne(this, 'check2')">
                                <label class="label" for="non">Non</label>
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
                function onlyOne(checkbox, className) {
                    var checkboxes = document.getElementsByClassName(className);
                    for (i = 0; i < checkboxes.length; i++) {
                        if (checkboxes[i] !== checkbox){
                            checkboxes[i].checked = false;
                        }
                        else if(checkboxes[i] == checkbox && checkboxes[i].checked==false){
                            checkboxes[i].checked = true;
                        }
                    }
                } 

                var option = <?php echo json_encode($option); ?>;
                if(option=="option_store"){
                    document.getElementById("rayon_cintrage").style.display = "none";
                    document.getElementById("ral").style.display = "none";
                    //document.getElementById("fournisseur").style.display = "none";
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
                    //document.getElementById("fournisseur").style.display = "none";
                    document.getElementById("doc_technique").style.display = "none";
                    DeleteByClass("vitre"); DeleteByClass("stratifie"); DeleteByClass("vinylique"); DeleteByClass("manuel"); DeleteByClass("electrique"); //Finition
                }
            </script>
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='options.php'">Précédent</button>
    </footer>
</html>