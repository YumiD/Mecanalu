<?php
    session_start();
    
    $produit = $_SESSION['buffer_evidence_finition'][0];
    $remplissage = $_SESSION['buffer_evidence_finition'][1];
    $PV = $_SESSION["PV"];

    if($produit=="e_cj"){
        if($remplissage=="e_plein"){
            $nom_produit="Couvre joint Plein";
            $produit_final="e_cj_p";
            $_SESSION["produit_evidence"]="E_CJ_plein";

        }else if($remplissage=="e_vitre"){
            $nom_produit="Couvre joint Vitré";
            $produit_final="e_cj_v";
            $_SESSION["produit_evidence"]="E_CJ_vitre";
        }else if($remplissage=="e_vitre_allege" ){
            $nom_produit="Couvre joint Vitré sur Allège";
            $produit_final="e_cj_va";
            $_SESSION["produit_evidence"]="E_CJ_vitreAllege";
        }
    }
    else if($produit=="e_bb"){
        if($remplissage=="e_plein"){
            $nom_produit="Bord à Bord Plein";
            $produit_final="e_bb_p";
            $_SESSION["produit_evidence"]="E_BB_plein";
        }else if($remplissage=="e_vitre"){
            $nom_produit="Bord à Bord Vitré";
            $produit_final="e_bb_v";
            $_SESSION["produit_evidence"]="E_BB_vitre";
        }else if($remplissage=="e_vitre_allege"){
            $nom_produit="Bord à Bord Vitré sur Allège";
            $produit_final="e_bb_va";
            $_SESSION["produit_evidence"]="E_BB_vitreAllege";
        }
    }
    $_SESSION["nom_produit"]=$nom_produit;

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
			max-width: 600px;
			width: 100%;
			padding: 0%;
        }
        #right{
            float: left;
			max-width: 600px;
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
        <h3> EVIDENCE SELECTIONNEZ VOS FINITIONS - <?php echo $nom_produit; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $produit_final; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="../buffer/buffer_evidence_finition.php" method="post">
                <div>
                    <label class="label" for="hauteur">Hauteur :</label>
                    <input type="text" id="hauteur" name="hauteur">
                </div>
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
                <!-- DIV PLEIN -->
                <div id="plein">
                    <!-- PLEIN -->
                    <div id="selectPlein">
                        <label class="label" for="plein">Plein :</label>
                        <select name="plein"  id="select_plein" onchange="UpdateSelect()">
                            <option class="plein" value="null">Sélectionner</option>
                            <option class="e_cj" id="e_cj_melamine" value="1">Mélaminé</option>
                            <option class="e_cj" id="e_cj_tole" value="2">Tôlé</option>
                            <option class="e_cj" id="e_cj_revetu" value="3">Revêtu</option>
                            <option class="e_bb" id="e_bb_melamine" value="4">Mélaminé</option>
                            <option class="e_bb" id="e_bb_tole" value="5">Tôlé</option>
                        </select>
                    </div>
                    <!-- FOURNISSEUR -->
                    <div id="fournisseur">
                        <label id="label_fournisseur" class="label" for="fournisseur">Fournisseur :</label>
                        <select name="fournisseur">
                            <option class="fournisseur" value="null">Sélectionner</option>
                            <option hidden class="fournisseur_melamine" value="1">EGGER</option>
                            <option hidden class="fournisseur_melamine" value="2">POLYREY</option>
                            <option hidden class="fournisseur_melamine" value="3">UNILIN</option>
                            <option hidden class="fournisseur_tole" value="4">Tôle (comat)</option>
                            <option hidden class="fournisseur_tole" value="5">Tôle agglo</option>
                            <option hidden class="fournisseur_revetu" value="6">Durafort</option>
                            <option hidden class="fournisseur_revetu" value="7">Muraspec</option>
                            <option hidden class="fournisseur_revetu" value="8">Pannex</option>
                            <option hidden class="fournisseur_revetu" value="9">Plastylon</option>
                        </select>
                    </div>
                    <!-- PLEIN PV -->
                    <div class="PV">
                        <label class="label" for="pleinPV">Plein PV :</label>
                        <select name="pleinPV" id="select_pleinPV">
                            <option class="pleinPV" value="null">Sélectionner</option>
                            <option hidden class="pleinPV_cj_melamine" value="Ra = 39 dB / Rw = 41 dB">2 faces mélaminé de 12 mm : Ra = 39 dB / Rw = 41 dB</option>
                            <option hidden class="pleinPV_cj_melamine" value="Ra = 42 dB / Rw = 45 dB">2 faces mélaminé de 12 mm + EPDM 5 kg : Ra = 42 dB / Rw = 45 dB</option>
                            <option hidden class="pleinPV_cj_melamine" value="Ra = 45 dB / Rw = 47 dB">2 faces mélaminé de 12 mm + EPDM 10 kg : Ra = 45 dB / Rw = 47 dB</option>
                            <option hidden class="pleinPV_cj_melamine" value="Ra = 47 dB / Rw = 49 dB">2 faces mélaminé de 12 mm + EPDM 15 kg : Ra = 47 dB / Rw = 49 dB</option>
                            <option hidden class="pleinPV_cj_melamine" value="Ra = 50 dB / Rw = 52 dB">2 faces mélaminé de 12 mm + EPDM 20 kg : Ra = 50 dB / Rw = 52 dB</option>
                            <option hidden class="pleinPV_cj_tole" value="Ra = 43 dB / Rw = 47 dB">Panneaux tolés : Ra = 43 dB / Rw = 47 dB</option>
                            <option hidden class="pleinPV_cj_tole" value="Ra = 47 dB / Rw = 50 dB">Panneaux tolés + EPDM 5kg : Ra = 47 dB / Rw = 50 dB</option>
                            <option hidden class="pleinPV_cj_tole" value="Ra = 51 dB / Rw = 54 dB">Panneaux tolés + EPDM 10kg : Ra = 51 dB / Rw = 54 dB</option>
                            <option hidden class="pleinPV_cj_tole" value="Ra = 47 dB / Rw = 50 dB">Fermacell tolés  : Ra = 47 dB / Rw = 50 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 40 dB / Rw = 43 dB">Plaque de plâtre standard : Ra = 40 dB / Rw = 43 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 43 dB / Rw = 46 dB">Plaque de plâtre phonique : Ra = 43 dB / Rw = 46 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 43 dB / Rw = 47 dB">Plaque de plâtre standard + EPDM 5 kg : Ra = 43 dB / Rw = 47 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 46 dB / Rw = 51 dB">Plaque de plâtre standard + EPDM 10 kg : Ra = 46 dB / Rw = 51 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 47 dB / Rw = 52 dB">Plaque de plâtre standard + EPDM 13 kg : Ra = 47 dB / Rw = 52 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 48 dB / Rw = 53 dB">Plaque de plâtre standard + EPDM 15 kg : Ra = 48 dB / Rw = 53 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 51 dB / Rw = 54 dB">Ra = 51 dB / Rw = 54 dB</option>
                            <option hidden class="pleinPV_cj_revetu" value="Ra = 47 dB / Rw = 50 dB">Ra = 47 dB / Rw = 50 dB</option>
                            <option hidden class="pleinPV_bb_melamine" value="Ra=38 dB / Rw = 41 dB">Ra=38 dB / Rw = 41 dB</option>
                            <option hidden class="pleinPV_bb_melamine" value="Ra=42 dB / Rw = 46 dB">Ra=42 dB / Rw = 46 dB</option>
                            <option hidden class="pleinPV_bb_melamine" value="Ra=45 dB / Rw = 49 dB">Ra=45 dB / Rw = 49 dB</option>
                            <option hidden class="pleinPV_bb_melamine" value="Ra=46 dB / Rw = 50 dB">Ra=46 dB / Rw = 50 dB</option>
                            <option hidden class="pleinPV_bb_melamine" value="Ra=48 dB / Rw = 51 dB">Ra=48 dB / Rw = 51 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=44 dB / Rw = 47 dB">Agglo + tole 7-10 : Ra=44 dB / Rw = 47 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=46 dB / Rw = 50 dB">Agglo + tole 7-10 EPDM 5 kg : Ra=46 dB / Rw = 50 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=49 dB / Rw = 51 dB">Agglo + tole 7-10 EPDM 10 kg : Ra=49 dB / Rw = 51 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=50 dB / Rw = 53 dB">Agglo + tole 7-10 EPDM 15 kg : Ra=50 dB / Rw = 53 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=52 dB / Rw = 54 dB">Ferm + tole 10-10 : Ra=52 dB / Rw = 54 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=48 dB / Rw = 51 dB">placoM0 + tole 10-10 : Ra=48 dB / Rw = 51 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=51 dB / Rw = 53 dB">placophonique + tole 10-10 : Ra=51 dB / Rw = 53 dB</option>
                            <option hidden class="pleinPV_bb_tole" value="Ra=49 dB / Rw = 51 dB">placo Std + tole 10-10 : Ra=49 dB / Rw = 51 dB</option>
                        </select>
                    </div>
                </div>
                <!-- DIV VITRE -->
                <div id=vitre>
                    <div style="display: flex;flex-wrap: wrap;">
                        <!-- CONCEPT -->
                        <label id="conceptLabel" class="label" for="concept">Concept :</label>
                        <div>
                        </div>
                        <div id="concept">
                            <ul style="list-style-type: none;">        
                                <li class="e_cj">
                                    <label for="atelier">Version Atelier</label>
                                    <input class="check1" type="checkbox" id="atelier" name="concept"  onclick="onlyOne(this, 'check1')">
                                </li>
                                <li class="e_cj">
                                    <label for="air">Version Air</label>
                                    <input class="check1" type="checkbox" id="air" name="concept" onclick="onlyOne(this, 'check1')">
                                </li>
                                <li class="e_bb">
                                    <label for="standard">Standard</label>
                                    <input class="check1" type="checkbox" id="standard" name="concept" onclick="onlyOne(this, 'check1')">
                                </li>
                                <li class="e_bb">
                                    <label for="air">Version Air</label>
                                    <input class="check1" type="checkbox" id="air" name="concept" onclick="onlyOne(this, 'check1')">
                                </li>
                                <li hidden class="e_cj_va">
                                    <label for="air">Version Atelier</label>
                                    <input class="check1" type="checkbox" id="atelier" name="concept" onclick="onlyOne(this, 'check1')">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- VITRE PV -->
                    <div class="PV">
                        <label class="label" for="vitrePV">Vitré PV :</label>
                        <select name="vitrePV">
                            <option class="vitrePV" value="null">Sélectionner</option>
                            <option hidden class="vitrePV_cj" value="Ra = 41 dB / Rw = 42 dB">6+ 8 mm : Ra = 41 dB / Rw = 42 dB</option>
                            <option hidden class="vitrePV_cj" value="Ra = 42 dB / Rw = 43 dB">6+44,2  : Ra = 42 dB / Rw = 43 dB</option>
                            <option hidden class="vitrePV_cj" value="Ra = 43 dB / Rw = 44 dB">6+44,2 silence : Ra = 43 dB / Rw = 44 dB</option>
                            <option hidden class="vitrePV_cj" value="Ra = 45 dB / Rw = 47 dB">44,2 silence + 44,2 silence : Ra = 45 dB / Rw = 47 dB</option>
                            <option hidden class="vitrePV_bb" value="Ra = 42 dB / Rw = 43 dB">10+ 12 mm : Ra = 42 dB / Rw = 43 dB</option>
                            <option hidden class="vitrePV_bb" value="Ra = 44 dB / Rw = 45 dB">10+66,2 silence : Ra = 44 dB / Rw = 45 dB</option>
                            <option hidden class="vitrePV_bb" value="Ra = 45 dB / Rw = 46 dB">12+ 66,2 silence : Ra = 45 dB / Rw = 46 dB</option>
                            <option hidden class="vitrePV_bb" value="Ra = 48 dB / Rw = 49 dB">66,2 silence + 66,2 silence : Ra = 48 dB / Rw = 49 dB</option>
                        </select>
                    </div>
                    <!-- FINITION VITRE -->
                    <div style="display: flex;flex-wrap: wrap;">
                        <label class="label" for="finition_vitre">Finition Vitré :</label>
                        <div id="finition_vitre">
                        </div>
                        <div>
                            <ul style="list-style-type: none;">        
                                <li class="e_cj">
                                    <label for="trempe">Trempé</label>
                                    <input class="check2" type="checkbox" id="trempe" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>
                                <li class="e_cj">
                                    <label for="feuillete">Feuilleté</label>
                                    <input class="check2" type="checkbox" id="feuillete" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>
                                <li class="e_cj">
                                    <label for="clair">Clair</label>
                                    <input class="check2" type="checkbox" id="clair" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>
                                <li class="e_bb">
                                    <label for="trempe">Trempé</label>
                                    <input class="check2" type="checkbox" id="trempe" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>
                                <li class="e_bb">
                                    <label for="clair">Feuilleté</label>
                                    <input class="check2" type="checkbox" id="feuillete" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>   
                                <li hidden class="e_cj_va">
                                    <label for="trempe">Trempé</label>
                                    <input class="check2" type="checkbox" id="trempe" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>
                                <li hidden class="e_cj_va">
                                    <label for="feuillete">Feuilleté</label>
                                    <input class="check2" type="checkbox" id="feuillete" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>
                                <li hidden class="e_cj_va">
                                    <label for="clair">Clair</label>
                                    <input class="check2" type="checkbox" id="clair" name="finition_vitre" onclick="onlyOne(this, 'check2')">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Option -->
                    <div hidden class="e_cj_va" id="option_finition">
                    <div style="display: flex;flex-wrap: wrap;">
                        <label class="label" for="option_finition">Option :</label>
                        <div id="option_finition">
                        </div>
                        <div>
                            <ul style="list-style-type: none;">        
                                <li class="e_cj_va">
                                    <label for="traverses">Traverses</label>
                                    <input class="check3" type="checkbox" id="traverses" name="option_finition" onclick="onlyOne(this, 'check3')">
                                </li>
                            </ul>
                        </div>
                    </div>
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
                function SetInvisible(id){
                    var elements = document.getElementsByClassName(id);
                    for(var i=0; i<elements.length; i++) {
                        elements[i].hidden = true;
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

                function UpdateSelect(){
                    var e = document.getElementById("select_plein");
                    var plein_selected = e.options[e.selectedIndex].id;
                    SetInvisible("pleinPV_cj_melamine"); SetInvisible("pleinPV_cj_tole"); SetInvisible("pleinPV_cj_revetu"); SetInvisible("pleinPV_bb_melamine"); SetInvisible("pleinPV_bb_tole");
                    SetInvisible("fournisseur_melamine"); SetInvisible("fournisseur_tole"); SetInvisible("fournisseur_revetu");
                    var label = document.getElementById("label_fournisseur");
                    label.textContent="Fournisseur :";
                    switch(plein_selected){
                        case "e_cj_melamine":
                            SetVisible("pleinPV_cj_melamine");
                            SetVisible("fournisseur_melamine");
                        break;
                        case "e_cj_tole":
                            SetVisible("pleinPV_cj_tole");
                            SetVisible("fournisseur_tole");
                            label.textContent="Type de tôle :";
                        break;
                        case "e_cj_revetu":
                            SetVisible("pleinPV_cj_revetu");
                            SetVisible("fournisseur_revetu");
                        break;
                        case "e_bb_melamine":
                            SetVisible("pleinPV_bb_melamine");
                            SetVisible("fournisseur_melamine");
                        break;
                        case "e_bb_tole":
                            SetVisible("pleinPV_bb_tole");
                            SetVisible("fournisseur_tole");
                            label.textContent="Type de tôle :";
                        break;
                        default:
                            console.log(plein_selected);
                        break;
                    }
                }

                var remplissage = <?php echo json_encode($remplissage); ?>;
                var produit = <?php echo json_encode($produit); ?>;
                var produit_final = <?php echo json_encode($produit_final); ?>;
                if(remplissage=="e_plein"){
                    document.getElementById("vitre").style.display = "none";
                }
                else if(remplissage=="e_vitre" ){
                    document.getElementById("plein").style.display = "none";
                }
                
                if(produit=="e_cj"){
                    var elements = document.getElementsByClassName("e_bb");
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                    SetVisible("vitrePV_cj");
                }
                else if(produit=="e_bb"){
                    var elements = document.getElementsByClassName("e_cj");
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                    SetVisible("vitrePV_bb");
                }
                
                if(produit_final=="e_bb_va"){
                    document.getElementById("concept").style.display = "none";
                    document.getElementById("conceptLabel").style.display = "none";
                    document.getElementById("fournisseur").style.display = "none";
                    document.getElementById("selectPlein").style.display = "none";
                }
                if(produit_final=="e_cj_va"){
                    document.getElementById("selectPlein").style.display = "none";
                    document.getElementById("fournisseur").style.display = "none";
                    var elements = document.getElementsByClassName("e_cj");
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                    var elements = document.getElementsByClassName("e_bb");
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                    var elements = document.getElementsByClassName("e_cj_va");
                    for(var i=0; i<elements.length; i++) {
                        elements[i].hidden = false;
                    }
                }

                var PV = <?php echo json_encode($PV); ?>;
                if(!PV){
                    SetInvisible("PV");
                }

            </script>
			
			<footer>
                <form action="../buffer/buffer_evidence_finition.php" method="post">
                    <div id="form">
                        <input type="submit" name="previous" value="Précédent" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';">
                    </div>
                </form>
			</footer>
    </div>
</body>

</html>