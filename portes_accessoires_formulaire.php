<?php
    session_start();

    if(!empty($_POST['accessoire'])) {    
        $accessoire = $_POST['accessoire'];
        $_SESSION["accessoire"] = $accessoire;
    }
    else $accessoire=$_SESSION["accessoire"];

    if($accessoire=="accessoire_bequillage"){
        $nom_accessoire="Béquillage";
    }
    else if($accessoire=="accessoire_paumelle"){
        $nom_accessoire="Paumelles";
    }
    else if($accessoire=="accessoire_serrure"){
        $nom_accessoire="Serrures";
    }
    $_SESSION["nom_accessoire"] = $nom_accessoire;

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
      <?php include('includes/header.html'); ?>
    </div> 

    <div id="content" style="height:75%;">
        <h3> ACCESSOIRES DE PORTE - <?php echo $nom_accessoire; ?> </h3>
            <div id="left">
                <img id="image_produit" src="ressources/<?php echo $accessoire; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="ajout.php" method="post">
                <!-- BEQUILLAGE -->
                <div id="bequillage">
                    <div>
                        <label for="porte_bi">Porte Bi-affleurante :</label>
                        <select name="porte_bi">
                            <option class="porte_bi" value="null">Menu déroulant</option>
                        </select>
                    </div>
                    <div>
                        <label for="porte_svdv">Porte SV ou DV :</label>
                        <select name="porte_svdv">
                            <option class="porte_svdv" value="null">Menu déroulant</option>
                        </select>
                    </div>
                    <div>
                        <label for="porte_clarit">Porte Clarit :</label>
                        <select name="porte_clarit">
                            <option class="porte_clarit" value="null">Menu déroulant</option>
                        </select>
                    </div>
                </div>
                <!-- PAUMELLES -->
                <div id="paumelles">
                    <div style="display: flex;flex-wrap: wrap;">
                        <label for="visible">Visible :</label>
                        <div id="visible">
                        </div>
                        <div>
                            <ul style="list-style-type: none;">        
                                <li class="oui">
                                    <input type="checkbox" id="oui" name="visible" checked>
                                    <label for="oui">Oui</label>
                                </li>
                                <li class="non">
                                    <input type="checkbox" id="non" name="visible">
                                    <label for="non">Non</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <label for="ral">RAL :</label>
                        <select name="ral">
                            <option class="ral" value="null">Menu déroulant</option>
                        <option  class="ral" value="9010">9010 Blanc </option>
                        <option  class="ral" value="9005">9005 Noir </option>
                        <option  class="ral" value="9006">9006 Gris </option>
                        <option  class="ral" value="9007">9007 Gris aluminium </option>
                        <option  class="ral" value="7005">7005 Gris souris </option>
                        <option  class="ral" value="7016">7016 Gris anthracite</option>
                        </select>
                    </div>
                </div>
                <!-- SERRURE -->
                <div id="serrure">
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="standard">
                                <input type="checkbox" id="standard" name="standard_magnetique" checked>
                                <label for="standard">Standard</label>
                            </li>
                            <li class="magnetique">
                                <input type="checkbox" id="nomagnetiquen" name="standard_magnetique">
                                <label for="magnetique">Magnétique</label>
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

                var accessoire = <?php echo json_encode($accessoire); ?>;
                if(accessoire=="accessoire_bequillage"){
                    document.getElementById("paumelles").style.display = "none";
                    document.getElementById("serrure").style.display = "none";
                }
                else if(accessoire=="accessoire_paumelle"){
                    document.getElementById("bequillage").style.display = "none";
                    document.getElementById("serrure").style.display = "none";
                }
                else if(accessoire=="accessoire_serrure"){
                    document.getElementById("bequillage").style.display = "none";
                    document.getElementById("paumelles").style.display = "none";
                }
            </script>
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='portes_accessoires.php'">Précédent</button>
    </footer>
</html>