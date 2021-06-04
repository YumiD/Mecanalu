<?php
session_start();

/*$nom_entreprise = $_SESSION['nom_entreprise'];
$nom_projet = $_SESSION['nom_projet'];
$presentation = $_SESSION['presentation'];
$fiche_technique = $_SESSION['fiche_technique'];*/

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Mecanalu - Récapitulatif</title>
        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/icon/icon_powerpoint.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 80px;
                height: 80px;}
            .image2{
                border:none;
                background-image:url('ressources/icon/icon_zip.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 80px;
                height: 80px;}
        </style>
    </head>
    
    <body>
        <div class="header">
            <?php include('includes/header.html'); ?>
        </div> 

        <div id="content">
            <h3> RECAPITULATIF DES ELEMENTS </h3>
            <h5> Récapitulatif des éléments choisis</h5>
            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
            <p> - Gamme : </p> <ul>
                <li id="R_E" hidden>Evidence</li>
                <li id="R_B" hidden>Boreale</li>
                <li id="R_Box" hidden>Evidence Box</li> </ul>
            <p> - Produit : </p> <ul>
                <li id="R_ECJ" hidden>Evidence Couvre-joint</li>
                <li id="R_EBB" hidden>Evidence Bord à bord</li>
                <li id="R_BBB" hidden>Boréale Bord à bord</li>
                <li id="R_BV" hidden>Boréale Verrière</li>
                <li id="R_Box_L" hidden>Box Little</li>
                <li id="R_Box_D" hidden>Box Duo</li>
                <li id="R_Box_M" hidden>Box Media</li>
                <li id="R_Box_A" hidden>Box Alta</li>
                <li id="R_Box_G" hidden>Box Grande</li> </ul>
            <p> - Porte : </p> <ul>
                <li id="R_porte_pleine" hidden>Porte Pleine</li>
                <li id="R_porte_vitre" hidden>Porte Vitré</li>
                <li id="R_porte_coulissante" hidden>Porte Coulissante</li>
                <li id="R_porte_bi_cadreAluminium" hidden>Porte Cadre Aluminium</li>
                <li id="R_porte_bi_bois" hidden>Porte Bois</li> </ul>
            <p> - Option : </p> <ul>
                <li id="R_Option_Aucune" hidden>Aucune</li>
                <li id="R_store" hidden>Store</li>
                <li id="R_ecrimur" hidden>Ecrimur</li>
                <li id="R_cintrage" hidden>Cintrage</li> </ul>
            <p> - Accessoire : </p>
                <li id="R_accessoire_aucun" hidden>Aucun</li>
                <li id="R_accessoire_bequillage" hidden>Béquillage</li>
                <li id="R_accessoire_paumelle_visibles" hidden>Paumelles Visibles</li>
                <li id="R_accessoire_paumelle_invisibles" hidden>Paumelles Invisibles</li>
                <li id="R_accessoire_serrure_standard" hidden>Serrure Standard</li>
                <li id="R_accessoire_serrure_magnetique" hidden>Serrure Magnétique</li>
                <li id="R_accessoire_oculus" hidden>Oculus</li>
                <li id="R_ferme_porte_visible" hidden>Ferme Porte Visible</li>
                <li id="R_ferme_porte_invisible" hidden>Ferme Porte Invisible</li>  </ul>
            <h5> Télécharger</h5>
            <!--<a href="creation.php"> <img style="width:80;height:80;margin-right:20px;" src="ressources/icon/icon_powerpoint.png"> </a>
            <a href="creation.php"> <img style="width:80;height:80;" src="ressources/icon/icon_zip.png"> </a>-->
            <form action="creation.php" method="post">
                <input type="submit" id="horizontal_item" name="pptx" value="icon_powerpoint" alt="Submit Form" class="image1"/>
                <input type="submit" id="horizontal_item" name="zip" value="icon_zip" alt="Submit Form"  class="image2"/>
            </form>
        </div>
        <script type="text/javascript">
            function SetVisible(id){
                var element = document.getElementById(id);
                    element.hidden = false;
            }
            var evidence = <?php echo json_encode($_SESSION["evidence"]); ?>;
            if(evidence){
                SetVisible("R_E");
                var e_cj = <?php echo json_encode($_SESSION["e_cj"]); ?>;
                if(e_cj)
                    SetVisible("R_ECJ");
                var e_bb = <?php echo json_encode($_SESSION["e_bb"]); ?>;
                if(e_bb)
                    SetVisible("R_EBB");
            }
            var boreale = <?php echo json_encode($_SESSION["boreale"]); ?>;
            if(boreale){
                SetVisible("R_B");
                var boreale_bb = <?php echo json_encode($_SESSION["boreale_bb"]); ?>;
                if(boreale_bb)
                    SetVisible("R_BBB");
                var boreale_verriere = <?php echo json_encode($_SESSION["boreale_verriere"]); ?>;
                if(boreale_verriere)
                    SetVisible("R_BV");
            }
            var evidence_box = <?php echo json_encode($_SESSION["evidence_box"]); ?>;
            if(evidence_box){
                SetVisible("R_Box");
                var box_little = <?php echo json_encode($_SESSION["box_little"]); ?>;
                if(box_little)
                    SetVisible("R_Box_L");
                var box_duo = <?php echo json_encode($_SESSION["box_duo"]); ?>;
                if(box_duo)
                    SetVisible("R_Box_D");
                var box_media = <?php echo json_encode($_SESSION["box_media"]); ?>;
                if(box_media)
                    SetVisible("R_Box_M");
                var box_alta = <?php echo json_encode($_SESSION["box_alta"]); ?>;
                if(box_alta)
                    SetVisible("R_Box_A");
                var box_grande = <?php echo json_encode($_SESSION["box_grande"]); ?>;
                if(box_grande)
                    SetVisible("R_Box_G");
            }
            var porte_pleine = <?php echo json_encode($_SESSION["porte_pleine"]); ?>;
            if(porte_pleine)
                SetVisible("R_porte_pleine");
            var porte_vitre = <?php echo json_encode($_SESSION["porte_vitre"]); ?>;
            if(porte_vitre)
                SetVisible("R_porte_vitre");
            var porte_coulissante = <?php echo json_encode($_SESSION["porte_coulissante"]); ?>;
            if(porte_coulissante)
                SetVisible("R_porte_coulissante");
            var porte_bi_cadreAluminium = <?php echo json_encode($_SESSION["porte_bi_cadreAluminium"]); ?>;
            if(porte_bi_cadreAluminium)
                SetVisible("R_porte_bi_cadreAluminium");
            var porte_bi_bois = <?php echo json_encode($_SESSION["porte_bi_bois"]); ?>;
            if(porte_bi_bois)
                SetVisible("R_porte_bi_bois");
            var option = <?php echo json_encode($_SESSION["option"]); ?>;
            if(option=="option_store")
                SetVisible("R_store");
            else if(option=="option_ecrimur")
                SetVisible("R_ecrimur");
            else if(option=="option_cintrage")
                SetVisible("R_cintrage");
            else
                SetVisible("R_Option_Aucune");
            var accessoire_bequillage = <?php echo json_encode($_SESSION["accessoire_bequillage"]); ?>;
            if(accessoire_bequillage)
                SetVisible("R_accessoire_bequillage");
            var accessoire_paumelle_visibles = <?php echo json_encode($_SESSION["accessoire_paumelle_visibles"]); ?>;
            if(accessoire_paumelle_visibles)
                SetVisible("R_accessoire_paumelle_visibles");
            var accessoire_paumelle_invisibles = <?php echo json_encode($_SESSION["accessoire_paumelle_invisibles"]); ?>;
            if(accessoire_paumelle_invisibles)
                SetVisible("R_accessoire_paumelle_invisibles");
            var accessoire_serrure_standard = <?php echo json_encode($_SESSION["accessoire_serrure_standard"]); ?>;
            if(accessoire_serrure_standard)
                SetVisible("R_accessoire_serrure_standard");
            var accessoire_serrure_magnetique = <?php echo json_encode($_SESSION["accessoire_serrure_magnetique"]); ?>;
            if(accessoire_serrure_magnetique)
                SetVisible("R_accessoire_serrure_magnetique");
            var accessoire_oculus = <?php echo json_encode($_SESSION["accessoire_oculus"]); ?>;
            if(accessoire_oculus)
                SetVisible("R_accessoire_oculus");
            var ferme_porte_visible = <?php echo json_encode($_SESSION["ferme_porte_visible"]); ?>;
            if(ferme_porte_visible)
                SetVisible("R_ferme_porte_visible");
            var ferme_porte_invisible = <?php echo json_encode($_SESSION["ferme_porte_invisible"]); ?>;
            if(ferme_porte_invisible)
                SetVisible("R_ferme_porte_invisible");
            
        </script>
    </body>

    <footer>
        <button onclick="window.location.href='ajout.php'">Précédent</button>
    </footer>
</html>