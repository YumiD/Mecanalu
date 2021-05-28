<?php
    session_start();

    if(!empty($_POST['porte'])) {    
        $porte = $_POST['porte'];
        $_SESSION["porte"] = $porte;
    }
    else $porte=$_SESSION["porte"];

    if($porte=="porte_bi"){
        //header('Location: evidence_portes_bi.php');
        echo "<script type='text/javascript'> document.location = 'evidence_portes_bi.php'; </script>";
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

    $nom_entreprise = $_SESSION['nom_entreprise'];

?>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.6.0/dist/pptxgen.bundle.js"></script>

    <script type="text/javascript">
        var pptx = new PptxGenJS();
    </script>

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
            <form action="evidence_options.php" method="post">
                <!-- HAUTEUR -->
                <div>
                    <label class="label" for="hauteur">Hauteur :</label>
                    <input type="text" id="hauteur" name="hauteur">
                </div>
                <!-- FINITION -->
                <div id="finition" style="display: flex;flex-wrap: wrap;">
                    <label class="label" for="finition">Finition :</label>
                    <div id="finition">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">
                            <li class="finition-plein">
                                <input type="checkbox" id="finition-plein" name="finition">
                                <label class="label" for="finition-plein">Plein</label>
                            </li>
                            <li class="finition-vitre">
                                <input type="checkbox" id="finition-vitre" name="finition">
                                <label class="label" for="finition-vitre">Vitré</label>
                            </li>
                            <li class="finition-stratifie">
                                <input type="checkbox" id="finition-stratifie" name="finition">
                                <label class="label" for="finition-stratifie">Stratifié</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- FINITION VITRE -->
                <div id="finition_vitre" style="display: flex;flex-wrap: wrap;">
                    <label class="label" for="finition_vitre">Finition Vitré :</label>
                    <div id="finition_vitre">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="plein">
                                <input class="check" type="checkbox" id="plein" name="finition_vitre" onclick="onlyOne(this, 'check')"  onchange="UpdateSelect()" checked>
                                <label class="label" for="plein">Plein</label>
                            </li>
                            <li class="vitre">
                                <input class="check" type="checkbox" id="vitre" name="finition_vitre" onclick="onlyOne(this, 'check')"  onchange="UpdateSelect()">
                                <label class="label" for="vitre">Vitré</label>
                            </li>
                        </ul>
                    </div>
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
                        <option hidden class="pv_cadreAlu_vitre" value="prema41">DV73 8+6 </option>
                        <option hidden class="pv_cadreAlu_vitre" value="prema41">DV73 44,2+33,2</option>
                        <option hidden class="pv_cadreAlu_plein" value="prema41">DV73 agglo 8</option>
                        <option hidden class="pv_cadreAlu_plein" value="prema41">DV73 Agglo dB</option>
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
                            <input class="ferme_porte" type="checkbox" id="ferme_porte_visible" name="ferme_porte[]" value="1" onclick="onlyOne(this, 'ferme_porte')">
                        </li>
                        <li class="ferme_porte_invisible">
                            <label class="label" for="ferme_porte_invisible">Invisible</label>
                            <input class="ferme_porte" type="checkbox" id="ferme_porte_invisible" name="ferme_porte[]" value="2" onclick="onlyOne(this, 'ferme_porte')">
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
                function SetInvisible(id){
                    var elements = document.getElementsByClassName(id);
                    for(var i=0; i<elements.length; i++) {
                        elements[i].hidden = true;
                    }
                }
                function onlyOne(checkbox, className) {
                    var checkboxes = document.getElementsByClassName(className);
                    for (i = 0; i < checkboxes.length; i++) {
                        if (checkboxes[i] !== checkbox) checkboxes[i].checked = false
                    }
                }
                function UpdateSelect(){
                    var c = document.getElementById("plein").checked;
                    if(c){
                        SetInvisible("pv_cadreAlu_vitre"); SetVisible("pv_cadreAlu_plein");
                    }
                    else{
                        SetVisible("pv_cadreAlu_vitre"); SetInvisible("pv_cadreAlu_plein");
                    }
                    
                }


                var porte = <?php echo json_encode($porte); ?>;
                if(porte=="porte_pleine"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                    SetVisible("pv_plein");
                    SetVisible("accessoire_oculus"); SetVisible("accessoire_bequillage"); SetVisible("accessoire_paumelle_invisibles"); SetVisible("accessoire_serrure_magnetique");
                }
                else if(porte=="porte_vitre"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    SetVisible("accessoire_bequillage"); SetVisible("accessoire_paumelle_invisibles"); SetVisible("accessoire_serrure_magnetique");
                }
                else if(porte=="porte_coulissante"){
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                    DeleteByClass("finition-stratifie");
                    SetVisible("accessoire_bequillage");
                }
                else if(porte=="porte_bi_cadreAluminium"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                    UpdateSelect();
                    SetVisible("accessoire_bequillage"); SetVisible("accessoire_paumelle_invisibles"); SetVisible("accessoire_serrure_magnetique");
                }
                else if(porte=="porte_bi_aluminiumCollee"){
                    document.getElementById("finition").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                }
                else if(porte=="porte_bi_bois"){
                    document.getElementById("finition_vitre").style.display = "none";
                    document.getElementById("stratifie").style.display = "none";
                    document.getElementById("vitré").style.display = "none";
                    DeleteByClass("finition-vitre");DeleteByClass("finition-plein");
                    SetVisible("pv_bois");
                    SetVisible("accessoire_bequillage"); SetVisible("accessoire_paumelle_invisibles"); SetVisible("accessoire_serrure_magnetique");
                }
            </script>
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='evidence_portes.php'">Précédent</button>
    </footer>
</html>