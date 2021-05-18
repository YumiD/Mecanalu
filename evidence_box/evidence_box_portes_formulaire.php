<?php
    session_start();

    if(!empty($_POST['porte'])) {    
        $porte = $_POST['porte'];
        $_SESSION["porte"] = $porte;
    }
    else $porte=$_SESSION["porte"];


    if($porte=="porte_pleine"){
        $nom_porte="Pleine";
    }
    else if($porte=="porte_vitre"){
        $nom_porte="Vitré";
    }
    $_SESSION["nom_porte"] = $nom_porte;

    $nom_entreprise = $_SESSION['nom_entreprise'];

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

    <body id="page">
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
            <form action="evidence_box_options.php" method="post">
                <!-- HAUTEUR -->
                <div>
                    <label class="label" for="hauteur">Hauteur :</label>
                    <input type="text" id="hauteur" name="hauteur">
                </div>
                <!-- STRATIFIE -->
                <div id="stratifie">
                    <label class="label" for="stratifie">Stratifié :</label>
                    <select name="stratifie">
                        <option class="stratifie" value="null">Menu déroulant</option>
                        <option class="stratifie" value="formica">Formica</option>
                        <option class="stratifie" value="polyrey">Polyrey</option>
                        <option class="stratifie" value="egger">Egger</option>
                    </select>
                </div>
                <!-- VITRE -->
                <div id="vitré">
                    <label class="label" for="vitré">Vitré :</label>
                    <select name="vitré">
                        <option class="vitré" value="null">Menu déroulant</option>
                        <option class="vitré" value="vitre_simple">Simple Vitrage</option>
                        <option class="vitré" value="vitre_double">Double Vitrage</option>
                        <option class="vitré" value="vitre_clarit">Clarit</option>
                    </select>
                </div>
                <!-- PV -->
                <div>
                    <label class="label" for="pv">PV :</label>
                    <select name="pv">
                        <option class="pv" value="null">Menu déroulant</option>
                        <option hidden class="pv_plein" value="standard">Standard</option>
                        <option hidden class="pv_plein" value="prema30">Prema 30 dB </option>
                        <option hidden class="pv_plein" value="prema35">Prema 35 dB </option>
                        <option hidden class="pv_plein" value="prema38">Prema 38 dB </option>
                        <option hidden class="pv_plein" value="prema39">Prema 39 dB </option>
                        <option hidden class="pv_plein" value="prema41">Prema 41 dB </option>
                    </select>
                </div>
                <!-- OPTION -->
                <label class="label" for="option">Option :</label>
                <div id="option">
                </div>
                <div>
                    <ul style="list-style-type: none;">
                        <li hidden class="accessoire_bequillage">
                            <label class="label" for="accessoire_bequillage">Béquillage</label>
                            <input type="checkbox" id="accessoire_bequillage" name="option[]" value="1">
                        </li>
                        <li hidden class="accessoire_paumelle_visibles">
                            <label class="label" for="accessoire_paumelle_visibles">Paumelles Visibles</label>
                            <input type="checkbox" id="accessoire_paumelle_visibles" name="option[]" value="2">
                        </li>
                        <li hidden class="accessoire_paumelle_invisibles">
                            <label class="label" for="accessoire_paumelle_invisibles">Paumelles Invisibles</label>
                            <input type="checkbox" id="accessoire_paumelle_invisibles" name="option[]" value="3">
                        </li>
                        <li hidden class="accessoire_serrure_standard">
                            <label class="label" for="accessoire_serrure_standard">Serrure Standard</label>
                            <input type="checkbox" id="accessoire_serrure_standard" name="option[]" value="4">
                        </li>
                        <li hidden class="accessoire_serrure_magnetique">
                            <label class="label" for="accessoire_serrure_magnetique">Serrure Magnétique</label>
                            <input type="checkbox" id="accessoire_serrure_magnetique" name="option[]" value="5">
                        </li>
                        <li hidden class="accessoire_oculus">
                            <label class="label" for="accessoire_oculus">Oculus</label>
                            <input type="checkbox" id="accessoire_oculus" name="option[]" value="6">
                        </li>
                    </ul>
                </div>
                <!-- FERME PORTE -->
                <label class="label" for="ferme_porte">Ferme Porte :</label>
                <div id="ferme_porte">
                </div>
                <div>
                    <ul style="list-style-type: none;">
                        <li class="ferme_porte_visible">
                            <label class="label" for="ferme_porte_visible">Visible</label>
                            <input type="checkbox" id="ferme_porte_visible" name="ferme_porte[]" value="1">
                        </li>
                        <li class="ferme_porte_invisible">
                            <label class="label" for="ferme_porte_invisible">Invisible</label>
                            <input type="checkbox" id="ferme_porte_invisible" name="ferme_porte[]" value="2">
                        </li>
                    </ul>
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
                function SetVisible(id){
                    var elements = document.getElementsByClassName(id);
                    for(var i=0; i<elements.length; i++) {
                        elements[i].hidden = false;
                    }
                }

                var porte = <?php echo json_encode($porte); ?>;
                if(porte=="porte_pleine"){
                    document.getElementById("vitré").style.display = "none";
                    SetVisible("pv_plein");
                    SetVisible("accessoire_oculus"); SetVisible("accessoire_bequillage"); SetVisible("accessoire_paumelle_invisibles"); SetVisible("accessoire_serrure_magnetique");
                }
                else if(porte=="porte_vitre"){
                    document.getElementById("stratifie").style.display = "none";
                    SetVisible("accessoire_bequillage"); SetVisible("accessoire_paumelle_invisibles"); SetVisible("accessoire_serrure_magnetique");
                }
            </script>
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='evidence_box_portes.php'">Précédent</button>
    </footer>
</html>