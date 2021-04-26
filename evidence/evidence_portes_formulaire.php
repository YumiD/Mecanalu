<?php
    session_start();

    if(!empty($_POST['porte'])) {    
        $porte = $_POST['porte'];
        $_SESSION["porte"] = $porte;
    }
    else $porte=$_SESSION["porte"];

    if($porte=="porte_bi"){
        header('Location: evidence_portes_bi.php');
    }
    else if($porte=="porte_pleine"){
        $nom_porte="Pleine";
    }
    else if($porte=="porte_vitre"){
        $nom_porte="Vitré";
    }
    else if($porte=="porte_coulissante"){
        $nom_porte="Coulissante";
    }
    else if($porte=="porte_bi_cadreAluminium"){
        $nom_porte="Bi-affleurante cadre alluminium";
    }
    else if($porte=="porte_bi_aluminiumCollee"){
        $nom_porte="Bi-affleurante vitre collée";
    }
    else if($porte=="porte_bi_bois"){
        $nom_porte="Bi-affleurante bois";
    }
    $_SESSION["nom_porte"] = $nom_porte;

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
        <?php include('../includes/header_evidence.html'); ?>
    </div> 

    <div id="content" style="height:75%;">
        <h3> EVIDENCE - PORTE <?php echo $nom_porte; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $porte; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="evidence_options.php" method="post">
                <!-- HAUTEUR -->
                <div>
                    <label for="hauteur">Hauteur :</label>
                    <input type="text" id="hauteur" name="hauteur">
                </div>
                <!-- FINITION -->
                <div id="finition" style="display: flex;flex-wrap: wrap;">
                    <label for="finition">Finition :</label>
                    <div id="finition">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="plein">
                                <input type="checkbox" id="plein" name="finition" checked>
                                <label for="plein">Plein</label>
                            </li>
                            <li class="vitre">
                                <input type="checkbox" id="vitre" name="finition">
                                <label for="vitre">Vitré</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- FINITION VITRE -->
                <div id="finition_vitre" style="display: flex;flex-wrap: wrap;">
                    <label for="finition_vitre">Finition Vitré :</label>
                    <div id="finition_vitre">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="plein">
                                <input type="checkbox" id="plein" name="finition_vitre" checked>
                                <label for="plein">Plein</label>
                            </li>
                            <li class="vitre">
                                <input type="checkbox" id="vitre" name="finition_vitre">
                                <label for="vitre">Vitré</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- STRATIFIE -->
                <div id="stratifie">
                    <label for="stratifie">Stratifié :</label>
                    <select name="stratifie">
                        <option class="stratifie" value="null">Menu déroulant</option>
                    </select>
                </div>
                <!-- VITRE -->
                <div id="vitré">
                    <label for="vitré">Vitré :</label>
                    <select name="vitré">
                        <option class="vitré" value="null">Menu déroulant</option>
                    </select>
                </div>
                <!-- PV -->
                <div>
                    <label for="pv">PV :</label>
                    <select name="pv">
                        <option class="pv" value="null">Menu déroulant</option>
                    </select>
                </div>
                <!-- OPTION -->
                <div id="option">
                    <label for="option">Option :</label>
                    <select name="option">
                        <option class="option" value="null">Menu déroulant</option>
                    </select>
                </div>
                <div style="margin-top:30px"></div>
                <div id="submitButton"> <input type="submit" value="Suivant"> </div>
            </form>
            </div>

            <script type="text/javascript">
                var porte = <?php echo json_encode($porte); ?>;
                if(porte=="porte_pleine"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                }
                else if(porte=="porte_vitre"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                }
                else if(porte=="porte_coulissante"){
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                }
                else if(porte=="porte_bi_cadreAluminium"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                    document.getElementById("option").style.display = "none";
                }
                else if(porte=="porte_bi_aluminiumCollee"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                    document.getElementById("option").style.display = "none";
                }
                else if(porte=="porte_bi_bois"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                    document.getElementById("option").style.display = "none";
                }
            </script>
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='evidence_portes.php'">Précédent</button>
    </footer>
</html>