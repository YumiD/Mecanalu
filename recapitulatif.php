<?php
session_start();

/*$nom_entreprise = $_SESSION['nom_entreprise'];
$nom_projet = $_SESSION['nom_projet'];
$presentation = $_SESSION['presentation'];
$fiche_technique = $_SESSION['fiche_technique'];*/

  $nom_entreprise = !empty($_SESSION['nom_entreprise']) ? $_SESSION['nom_entreprise'] : "";
  $nom_projet = !empty($_SESSION['nom_projet']) ? $_SESSION['nom_projet'] : "";
  // presentation = presentation du projet de la page d'entreprise
  $presentation = !empty($_SESSION['presentation']) ? $_SESSION['presentation'] : "";
  // marqueur qui montre que l'on souhaite avoir les fiches techniques de chaque gamme selectionnée
  $fiche_technique = !empty($_SESSION['fiche_technique']) ? $_SESSION['fiche_technique'] : false;

  //Gamme generales
  $evidence = !empty($_SESSION["evidence"]) ? $_SESSION['evidence'] : false;
  $boreale = !empty($_SESSION["boreale"]) ? $_SESSION['boreale'] : false;
  $evidence_box = !empty($_SESSION["evidence_box"]) ? $_SESSION['evidence_box'] : false;
  // details gamme Evidence
  $e_cj = !empty($_SESSION["e_cj"]) ? $_SESSION['e_cj'] : false;
  $e_bb = !empty($_SESSION["e_bb"]) ? $_SESSION['e_bb'] : false;
  $e_plein = !empty($_SESSION["e_plein"]) ? $_SESSION['e_plein'] : false;
  $e_vitre = !empty($_SESSION["e_vitre"]) ? $_SESSION['e_vitre'] : false;
  $e_vitre_allege = !empty($_SESSION["e_vitre_allege"]) ? $_SESSION['e_vitre_allege'] : false;
  $e_cj_p = !empty($_SESSION["e_cj_p"]) ? $_SESSION['e_cj_p'] : false;
  $e_bb_p = !empty($_SESSION["e_bb_p"]) ? $_SESSION['e_bb_p'] : false;
  $e_cj_v = !empty($_SESSION["e_cj_v"]) ? $_SESSION['e_cj_v'] : false;
  $e_bb_v = !empty($_SESSION["e_bb_v"]) ? $_SESSION['e_bb_v'] : false;
  $e_cj_va = !empty($_SESSION["e_cj_va"]) ? $_SESSION['e_cj_va'] : false;
  $e_bb_va = !empty($_SESSION["e_bb_va"]) ? $_SESSION['e_bb_va'] : false;
  //details gamme Boreale
  $boreale_bb = !empty($_SESSION["boreale_bb"]) ? $_SESSION['boreale_bb'] : false;
  
  $boreale_verriere = !empty($_SESSION["boreale_verriere"]) ? $_SESSION['boreale_verriere'] : false;
  
  //details gamme Evidence Box
  $box_little = !empty($_SESSION["box_little"]) ? $_SESSION['box_little'] : false;
  $box_duo = !empty($_SESSION["box_duo"]) ? $_SESSION['box_duo'] : false;
  $box_media = !empty($_SESSION["box_media"]) ? $_SESSION['box_media'] : false;
  $box_alta = !empty($_SESSION["box_alta"]) ? $_SESSION['box_alta'] : false;
  $box_grande = !empty($_SESSION["box_grande"]) ? $_SESSION['box_grande'] : false;
  
  //types de Portes
  $porte_pleine=!empty($_SESSION["porte_pleine"]) ? $_SESSION['porte_pleine'] : false;
  $porte_vitre=!empty($_SESSION["porte_vitre"]) ? $_SESSION['porte_vitre'] : false;
  $porte_coulissante=!empty($_SESSION["porte_coulissante"]) ? $_SESSION['porte_coulissante'] : false;
  $porte_bi_cadreAluminium=!empty($_SESSION["porte_bi_cadreAluminium"]) ? $_SESSION['porte_bi_cadreAluminium'] : false;
  $porte_bi_bois=!empty($_SESSION["porte_bi_bois"]) ? $_SESSION['porte_bi_bois'] : false;
  $accessoire_bequillage = !empty($_SESSION["accessoire_bequillage"]) ? $_SESSION['accessoire_bequillage'] : false;
  $accessoire_paumelle_visibles = !empty($_SESSION["accessoire_paumelle_visibles"]) ? $_SESSION['accessoire_paumelle_visibles'] : false;
  $accessoire_paumelle_invisibles = !empty($_SESSION["accessoire_paumelle_invisibles"]) ? $_SESSION['accessoire_paumelle_invisibles'] : false;
  $accessoire_serrure_standard = !empty($_SESSION["accessoire_serrure_standard"]) ? $_SESSION['accessoire_serrure_standard'] : false;
  $accessoire_serrure_magnetique = !empty($_SESSION["accessoire_serrure_magnetique"]) ? $_SESSION['accessoire_serrure_magnetique'] : false;
  $accessoire_oculus = !empty($_SESSION["accessoire_oculus"]) ? $_SESSION['accessoire_oculus'] : false;
  $ferme_porte_visible = !empty($_SESSION["ferme_porte_visible"]) ? $_SESSION['ferme_porte_visible'] : false;
  $ferme_porte_invisible = !empty($_SESSION["ferme_porte_invisible"]) ? $_SESSION['ferme_porte_invisible'] : false;
  //$accessoire = $_SESSION["accessoire"];
  $nom_accessoire = !empty($_SESSION['nom_accessoire']) ? $_SESSION['nom_accessoire'] : false;
  $ferme_porte = !empty($_SESSION["ferme_porte"]) ? $_SESSION['ferme_porte'] : false;
  //Option
  $option= !empty($_SESSION["option"]) ? $_SESSION['option'] : false;
  $nom_option = !empty($_SESSION['nom_option']) ? $_SESSION['nom_option'] : false;


// Create ZIP file
if(isset($_POST['create'])){
  $zip = new ZipArchive();
  $filename = "./fichespdfdoe.zip";

  if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
  }

  $dir = 'zip_fiches_techniques/';

  // Create zip
  createZip($zip,$dir);

  $zip->close();
}

// Create zip
function createZip($zip,$dir){
  if (is_dir($dir)){

    if ($dh = opendir($dir)){
       while (($file = readdir($dh)) !== false){
 
         // If file
         if (is_file($dir.$file)) {
            if($file != '' && $file != '.' && $file != '..'){
 
               $zip->addFile($dir.$file);
            }
         }else{
            // If directory
            if(is_dir($dir.$file) ){

              if($file != '' && $file != '.' && $file != '..'){

                // Add empty directory
                $zip->addEmptyDir($dir.$file);

                $folder = $dir.$file.'/';
 
                // Read data of the folder
                createZip($zip,$folder);
              }
            }
 
         }
 
       }
       closedir($dh);
     }
  }
}
// Fin création ZIP

// Copier coller un fichier PDF dans le répertoire include
 
if(!empty($_SESSION["evidence"])) {
	$source = 'pdfmodule/evidence/_evi_cat.pdf';	
    $destination = 'zip_fiches_techniques/_evi_cat.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["evidence"])) {
	$source = 'pdfmodule/evidence/_evi_CERFF.pdf';	
    $destination = 'zip_fiches_techniques/_evi_CERFF.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["evidence"])) {
	$source = 'pdfmodule/evidence/_evi_tech_joint_M2.pdf';	
    $destination = 'zip_fiches_techniques/_evi_tech_joint_M2.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["evidence"])) {
	$source = 'pdfmodule/evidence/_evi_FDES.pdf';	
    $destination = 'zip_fiches_techniques/_evi_FDES.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["e_cj_p"])) {
	$source = 'pdfmodule/evidence/_evi_cj/_evi_cj_p/_evi_cj_p_rem_alu_FDES_opaque.pdf';	
    $destination = 'zip_fiches_techniques/_evi_cj_p_rem_alu_FDES_opaque.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["boreale"])) {
	$source = 'pdfmodule/boreale/_b_cat_boreale.pdf';	
    $destination = 'zip_fiches_techniques/_b_cat_boreale.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["boreale"])) {
	$source = 'pdfmodule/boreale/_b_poster.pdf';	
    $destination = 'zip_fiches_techniques/_b_poster.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["evidence_box"])) {
	$source = 'pdfmodule/box/_box_mont_porte_centree.pdf';	
    $destination = 'zip_fiches_techniques/_box_mont_porte_centree.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["evidence_box"])) {
	$source = 'pdfmodule/box/_box_mont_porte_droite.pdf';	
    $destination = 'zip_fiches_techniques/_box_mont_porte_droite.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["evidence_box"])) {
	$source = 'pdfmodule/box/_box_mont_porte_gauche.pdf';	
    $destination = 'zip_fiches_techniques/_box_mont_porte_gauche.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["porte_pleine"])) {
	$source = 'pdfmodule/portes/_por_butee.pdf';	
    $destination = 'zip_fiches_techniques/_por_butee.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["porte_pleine"])) {
	$source = 'pdfmodule/portes/_por_butee.pdf';	
    $destination = 'zip_fiches_techniques/_por_butee.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["porte_pleine"])) {
	$source = 'pdfmodule/portes/_por_joint_huisserie.pdf';	
    $destination = 'zip_fiches_techniques/_por_joint_huisserie.pdf';
	copy($source, $destination); 
}

if(!empty($_SESSION["porte_pleine"])) {
	$source = 'pdfmodule/portes/_por_tech_cylindre_surete_alpha.pdf';	
    $destination = 'zip_fiches_techniques/_por_tech_cylindre_surete_alpha.pdf';
	copy($source, $destination); 
}

// Fin Copier coller un fichier PDF


// Téléchargement du fichier Zip
if(isset($_POST['download'])){
 
  $filename = "fichespdfdoe.zip";

  if (file_exists($filename)) {
     header('Content-Type: application/zip');
     header('Content-Disposition: attachment; filename="'.basename($filename).'"');
     header('Content-Length: ' . filesize($filename));

     flush();
     readfile($filename);
     // delete file
     unlink($filename);
 
   }
}

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Mecanalu - Récapitulatif</title>
        <style>
            .image1{ /* Le premier bouton */
                cursor: pointer;
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
                cursor: pointer;
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
    
    <body id="page">
        <div class="header">
            <?php include('includes/header.html'); ?>
        </div> 

        <div id="content">
            <h3> RECAPITULATIF DES ELEMENTS </h3>
            <h4> Récapitulatif des éléments choisis</h4>
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
				
				
            <h5 style="font-size:20px;"> Vous pouvez télécharger la présentation PowerPoint</h5>
			<p>La création du PPT peut être plus ou moins longue en fonction du nombre de gammes et de choix sélectionnés. </p>

            <form action="buffer/buffer_creation.php" method="post">
                <input id="powerpoint" name="pptx" value="icon_powerpoint" alt="Submit Form" class="image1"/>
            </form>
	
	<h5 style="font-size:20px;"> Si vous souhaitez les fiches produits, télécharger le ZIP</h5>
	<p>La création du dossier ZIP peut être plus ou moins longue en fonction du nombre de fiches produits. </p>
		<div class='container'>
		 <form method='post' action=''>
		   <input style="font-size:20px;background-color: #e63c08;color: #ffffff;font-family: 'Montserrat';cursor: pointer; border: none;padding: 10px 20px;" type='submit' name='create' value='1. Création du ZIP' /> </br></br>
		   <input id="zip" style="font-size:20px;background-color: #e63c08;color: #ffffff;font-family: 'Montserrat';cursor: pointer; border: none;padding: 10px 20px;" type='submit' name='download' value='2. Téléchargement du ZIP' />
		 </form>

		</div>
		<footer style="position:relative; float:right;">
			<button onclick="window.location.href='ajout.php'">Précédent</button>
		</footer>
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

</html>
  
  
<script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.6.0/dist/pptxgen.bundle.js"></script>

<script src="https://cdn.jsdelivr.net/npm/pptxgenjs@3.6.0/libs/jszip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pptxgenjs@3.6.0/dist/pptxgen.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>


<script type="text/javascript">

    var powerpoint = document.getElementById("powerpoint");
    powerpoint.onclick = downloadPPT;

    function downloadPPT()
    {
	
        var nom_entreprise = <?php echo json_encode($nom_entreprise); ?>;
        var nom_projet = <?php echo json_encode($nom_projet); ?>;
        var presentation = <?php echo json_encode($presentation); ?>;
        var fiche_technique = <?php echo json_encode($fiche_technique); ?>;

        //Gamme
        var evidence = <?php echo json_encode($evidence); ?>;
        var boreale = <?php echo json_encode($boreale); ?>;
        var evidence_box = <?php echo json_encode($evidence_box); ?>;
        //Evidence
        var e_cj = <?php echo json_encode($e_cj); ?>;
        var e_bb = <?php echo json_encode($e_bb); ?>;
        var e_plein = <?php echo json_encode($e_plein); ?>;
        var e_vitre = <?php echo json_encode($e_vitre); ?>;
        var e_vitre_allege = <?php echo json_encode($e_vitre_allege); ?>;
        var e_cj_p = <?php echo json_encode($e_cj_p); ?>;
        var e_bb_p = <?php echo json_encode($e_bb_p); ?>;
        var e_cj_v = <?php echo json_encode($e_cj_v); ?>;
        var e_bb_v = <?php echo json_encode($e_bb_v); ?>;
        var e_cj_va = <?php echo json_encode($e_cj_va); ?>;
        var e_bb_va = <?php echo json_encode($e_bb_va); ?>;
        //Boreale
        var boreale_bb = <?php echo json_encode($boreale_bb); ?>;
        var boreale_verriere = <?php echo json_encode($boreale_verriere); ?>;
        //Evidence Box
        var box_little = <?php echo json_encode($box_little); ?>;
        var box_duo = <?php echo json_encode($box_duo); ?>;
        var box_media = <?php echo json_encode($box_media); ?>;
        var box_alta = <?php echo json_encode($box_alta); ?>;
        var box_grande = <?php echo json_encode($box_grande); ?>;
        //Porte
        var porte_pleine = <?php echo json_encode($porte_pleine); ?>;
        var porte_vitre = <?php echo json_encode($porte_vitre); ?>;
        var porte_coulissante = <?php echo json_encode($porte_coulissante); ?>;
        var porte_bi_cadreAluminium = <?php echo json_encode($porte_bi_cadreAluminium); ?>;
	
        var porte_bi_bois = <?php echo json_encode($porte_bi_bois); ?>;
        var accessoire_bequillage = <?php echo json_encode($accessoire_bequillage); ?>;
        var accessoire_paumelle_visibles = <?php echo json_encode($accessoire_paumelle_visibles); ?>;
        var accessoire_paumelle_invisibles = <?php echo json_encode($accessoire_paumelle_invisibles); ?>;
        var accessoire_serrure_standard = <?php echo json_encode($accessoire_serrure_standard); ?>;
        var accessoire_serrure_magnetique = <?php echo json_encode($accessoire_serrure_magnetique); ?>;
        var accessoire_oculus = <?php echo json_encode($accessoire_oculus); ?>;
        var ferme_porte_visible = <?php echo json_encode($ferme_porte_visible); ?>;
        var ferme_porte_invisible = <?php echo json_encode($ferme_porte_invisible); ?>;
        //Option
        var option = <?php echo json_encode($option); ?>;

        var pptx = new PptxGenJS();

        /*------PREMIERE PAGE-------*/
		slide = pptx.addSlide();
		slide.background = { path: "./ressources/pptx_placeholder/projet.png" };
		slide.addText("<?php echo $_SESSION["nom_projet"]; ?>", {x: 3.8, y: 2.3,  w:'55%', h:'15%', align: 'left', fontSize: 30, fontWeight: 700, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION["presentation"]; ?>", {x: 0.5, y: 3.5,  w:'90%', h:'22%', align: 'center', fontSize: 12, fontWeight: 700, color: '555555'}).addText("<?php echo $_SESSION["nom_entreprise"]; ?>", {x: 0.4, y: 0.4,  w:'20.5%', h:'10%', align: 'left', fontSize:14, fontWeight: 700, color: '555555', fill: 'ffffff'});
		// slide.addImage({ path: "./ressources/icon/icon_photo.png", x: 0.4, y: 0.9, w:'20%', h:'20%' });

        /*------PLACEHOLDERS-------*/
        if(evidence){
        if(e_cj){
            if(e_cj_p){//Cloison Pleine Couvre joint
            var slide = pptx.addSlide();
             slide.background = { path: "./ressources/pptx_placeholder/e_cj_p.png" };
			 slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 6.5, y: 1.67, w: 1.0, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 5.6, y: 1.97, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill:
			 'ffffff'}).addText("<?php echo $_SESSION["pleinPV"]; ?>", {x: 5.5, y: 3.0, w: 4.0, h: 0.15, align: 'left', fontSize: 9, color: '555555', fill: 'ffffff'});
            }			
            			
			if(e_cj_v || e_cj_va){//Cloison Vitrée Couvre joint
            var slide = pptx.addSlide();
            slide.background = { path: "./ressources/pptx_placeholder/e_cj_v.png" };
			 slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 6.5, y: 1.67, w: 1.0, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 5.6, y: 1.97, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill: 'ffffff'}).addText("<?php echo$_SESSION["vitrePV"]; ?>", {x: 5.5, y: 3.0, w: 4.0, h: 0.15, align: 'left', fontSize: 9, color: '555555', fill: 'ffffff'});	
            }
			
			if(e_cj_v || e_cj_v){//Cloison Vitrée sur Allège
            var slide = pptx.addSlide();
            slide.background = { path: "./ressources/pptx_placeholder/e_cloison_vitreAllege.png" };
			slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 6.5, y: 1.67, w: 1.0, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 5.6, y: 2.12, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill: 'ffffff'});	
            }
						
        }if(e_bb){//Bord à Bord - descriptif
            var slide = pptx.addSlide();
            slide.addImage({ path: "./ressources/pptx_placeholder/e_bb.png", x:0, y:0, w:'90%', h:'90%' });
			
            if(e_bb_p){//Cloison Pleine Bord à Bord
            var slide = pptx.addSlide();
			 slide.background = { path: "./ressources/pptx_placeholder/e_bb_p.png" };
			 slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 6.5, y: 1.57, w: 1.0, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 5.6, y: 2.01, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill: 'ffffff'}).addText("<?php echo $_SESSION["pleinPV"];  ?>", {x: 5.55, y: 3.07, w: 4.0, h: 0.15, align: 'left', fontSize: 9, color: '555555', fill: 'ffffff'});		
            }
			
            }if(e_bb_v || e_bb_va){//Cloison Vitrée Bord à Bord
            var slide = pptx.addSlide();
            slide.background = { path: "./ressources/pptx_placeholder/e_bb_v.png" };
			slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 6.5, y: 1.3, w: 1.0, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 5.6, y: 1.72, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill: 'ffffff'}).addText("<?php echo $_SESSION["vitrePV"]; ?>", {x: 5.5, y: 3.05, w: 4.0, h: 0.15, align: 'left', fontSize: 9, color: '555555', fill: 'ffffff'});		
            }
            
        }
        
        if(boreale){
        if(boreale_bb){ //Descriptif Boreale
            var slide = pptx.addSlide();
			slide.background = { path: "./ressources/pptx_placeholder/boreale.png" };
				slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 5.15, y: 2.45, w: 1.3, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 4.97, y: 2.60, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill: 'ffffff'});
			
		}
		if(boreale_verriere){//Descriptif Verrière
            var slide = pptx.addSlide();
			slide.background = { path: "./ressources/pptx_placeholder/boreale_verriere.png" };
				slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 5.15, y: 2.45, w: 1.3, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 4.97, y: 2.60, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill: 'ffffff'});
        }
        }

        if(evidence_box){// Box Little
        if(box_little){
            var slide = pptx.addSlide();
			slide.background = { path: "./ressources/pptx_placeholder/e_box_little.png" };
				slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 4.8, y: 1.8, w: 1.3, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'});
        }
		if(box_duo){// Box Duo
            var slide = pptx.addSlide();
			slide.background = { path: "./ressources/pptx_placeholder/e_box_duo.png" };
				slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 4.8, y: 2.12, w: 1.3, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'});
        }
		if(box_media){// Box Media
            var slide = pptx.addSlide();
			slide.background = { path: "./ressources/pptx_placeholder/e_box_media.png" };
			slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 4.8, y: 2.12, w: 1.3, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'});
        }
		if(box_alta){// Box Alta
            var slide = pptx.addSlide();
			slide.background = { path: "./ressources/pptx_placeholder/e_box_alta.png" };
			slide.addText("<?php echo $_SESSION[hauteur];?>", {x: 4.8, y: 2.12, w: 1.3, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'});
        }
		if(box_grande){// Box Grande
            var slide = pptx.addSlide();
			slide.background = { path: "./ressources/pptx_placeholder/e_box_grande.png" };
			slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 4.8, y: 2.12, w: 1.3, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'});
        }
        }

        if(porte_bi_bois){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/porte_bi_bois.png", x:0, y:0, w:'90%', h:'90%' });
        var isPorteBi = true;
        } if(porte_bi_cadreAluminium){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/porte_bi_cadreAlu.png", x:0, y:0, w:'90%', h:'90%' });
        var isPorteBi = true;
        } if(porte_pleine){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/porte_pleine.png", x:0, y:0, w:'90%', h:'90%' });
        var isPorteBi = false;    
        } if(porte_vitre){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/porte_clarit.png", x:0, y:0, w:'90%', h:'90%' });
        var isPorteBi = false;    
        } if(porte_coulissante){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/porte_coulissante.png", x:0, y:0, w:'90%', h:'90%' });
        var isPorteBi = false;    
        }

        if(accessoire_bequillage && isPorteBi){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/accessoire_bequillage_bi.png", x:0, y:0, w:'90%', h:'90%' });
        }if(accessoire_bequillage && !isPorteBi){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/accessoire_bequillage.png", x:0, y:0, w:'90%', h:'90%' });
        } if(accessoire_paumelle_invisibles){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/accessoire_paumelles_invisible.png", x:0, y:0, w:'90%', h:'90%' });
        }

        if(ferme_porte_visible){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/accessoire_fermeporte_visible.png", x:0, y:0, w:'90%', h:'90%' });
        } if(ferme_porte_invisible){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/accessoire_fermeporte_invisible.png", x:0, y:0, w:'90%', h:'90%' });
        }

        if(option == "option_store"){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/option_store.png", x:0, y:0, w:'90%', h:'90%' });
        } else if(option == "option_ecrimur"){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/option_ecrimur.png", x:0, y:0, w:'90%', h:'90%' });
        } else if(option == "option_cintrage"){
        var slide = pptx.addSlide();
        slide.addImage({ path: "./ressources/pptx_placeholder/option_cintrage.png", x:0, y:0, w:'90%', h:'90%' });
        }

        /*------Création du PPTX-------*/
        pptx.company = 'Mecanalu';
        pptx.writeFile({fileName: 'Projet-DOE-Mecanalu.pptx'});



        function SetInvisible(id){
        var element = document.getElementById(id);
        element.hidden = true;
        }

        var zip_bool = <?php echo json_encode($zip_bool); ?>;
        if(!zip_bool){
        SetInvisible("buttonZIP");
        }
    }

</script>