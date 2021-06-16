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
  $PV = !empty($_SESSION['PV']) ? $_SESSION['PV'] : false;
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
  $e_cj_melamine = !empty($_SESSION["e_cj_melamine"]) ? $_SESSION['e_cj_melamine'] : false;
  $e_cj_tole = !empty($_SESSION["e_cj_tole"]) ? $_SESSION['e_cj_tole'] : false;
  $e_cj_revetu = !empty($_SESSION["e_cj_revetu"]) ? $_SESSION['e_cj_revetu'] : false;
  $e_bb_melamine = !empty($_SESSION["e_bb_melamine"]) ? $_SESSION['e_bb_melamine'] : false;
  $e_bb_tole = !empty($_SESSION["e_bb_tole"]) ? $_SESSION['e_bb_tole'] : false;
  $fournisseur_evidence_EGGER = !empty($_SESSION["fournisseur_evidence_EGGER"]) ? $_SESSION['fournisseur_evidence_EGGER'] : false;
  $fournisseur_evidence_POLYREY = !empty($_SESSION["fournisseur_evidence_POLYREY"]) ? $_SESSION['fournisseur_evidence_POLYREY'] : false;
  $fournisseur_evidence_UNILIN = !empty($_SESSION["fournisseur_evidence_UNILIN"]) ? $_SESSION['fournisseur_evidence_UNILIN'] : false;
  $fournisseur_evidence_toleComat = !empty($_SESSION["fournisseur_evidence_toleComat"]) ? $_SESSION['fournisseur_evidence_toleComat'] : false;
  $fournisseur_evidence_toleAgglo = !empty($_SESSION["fournisseur_evidence_toleAgglo"]) ? $_SESSION['fournisseur_evidence_toleAgglo'] : false;
  $fournisseur_evidence_Durafort = !empty($_SESSION["fournisseur_evidence_Durafort"]) ? $_SESSION['fournisseur_evidence_Durafort'] : false;
  $fournisseur_evidence_Muraspec = !empty($_SESSION["fournisseur_evidence_Muraspec"]) ? $_SESSION['fournisseur_evidence_Muraspec'] : false;
  $fournisseur_evidence_Pannex = !empty($_SESSION["fournisseur_evidence_Pannex"]) ? $_SESSION['fournisseur_evidence_Pannex'] : false;
  $fournisseur_evidence_Plastylon = !empty($_SESSION["fournisseur_evidence_Plastylon"]) ? $_SESSION['fournisseur_evidence_Plastylon'] : false;
  

  //details gamme Boreale
  $boreale_bb = !empty($_SESSION["boreale_bb"]) ? $_SESSION['boreale_bb'] : false;
  $boreale_verriere = !empty($_SESSION["boreale_verriere"]) ? $_SESSION['boreale_verriere'] : false;
  $vitre_boreale_10mm = !empty($_SESSION["vitre_boreale_10mm"]) ? $_SESSION['vitre_boreale_10mm'] : false;
  $vitre_boreale_12mm = !empty($_SESSION["vitre_boreale_12mm"]) ? $_SESSION['vitre_boreale_12mm'] : false;
  $vitre_boreale_15mm = !empty($_SESSION["vitre_boreale_15mm"]) ? $_SESSION['vitre_boreale_15mm'] : false;
  $vitre_boreale_55_2F = !empty($_SESSION["vitre_boreale_55_2F"]) ? $_SESSION['vitre_boreale_55_2F'] : false;
  $vitre_boreale_55_2SF = !empty($_SESSION["vitre_boreale_55_2SF"]) ? $_SESSION['vitre_boreale_55_2SF'] : false;
  $vitre_boreale_66_2F = !empty($_SESSION["vitre_boreale_66_2F"]) ? $_SESSION['vitre_boreale_66_2F'] : false;
  $vitre_boreale_66_2SF = !empty($_SESSION["vitre_boreale_66_2SF"]) ? $_SESSION['vitre_boreale_66_2SF'] : false;

  //details gamme Evidence Box
  $box_little = !empty($_SESSION["box_little"]) ? $_SESSION['box_little'] : false;
  $box_duo = !empty($_SESSION["box_duo"]) ? $_SESSION['box_duo'] : false;
  $box_media = !empty($_SESSION["box_media"]) ? $_SESSION['box_media'] : false;
  $box_alta = !empty($_SESSION["box_alta"]) ? $_SESSION['box_alta'] : false;
  $box_grande = !empty($_SESSION["box_grande"]) ? $_SESSION['box_grande'] : false;
  $face_plein_evidence_box_EGGER = !empty($_SESSION["face_plein_evidence_box_EGGER"]) ? $_SESSION['face_plein_evidence_box_EGGER'] : false;
  $face_plein_evidence_box_Unilin = !empty($_SESSION["face_plein_evidence_box_Unilin"]) ? $_SESSION['face_plein_evidence_box_Unilin'] : false;
  $face_plein_evidence_box_Polyrey = !empty($_SESSION["face_plein_evidence_box_Polyrey"]) ? $_SESSION['face_plein_evidence_box_Polyrey'] : false;
  $face_vitre_evidence_box_6_8 = !empty($_SESSION["face_vitre_evidence_box_6_8"]) ? $_SESSION['face_vitre_evidence_box_6_8'] : false;
  $face_vitre_evidence_box_10_12 = !empty($_SESSION["face_vitre_evidence_box_10_12"]) ? $_SESSION['face_vitre_evidence_box_10_12'] : false;
  
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
  $nom_accessoire = !empty($_SESSION['nom_accessoire']) ? $_SESSION['nom_accessoire'] : false;
  $ferme_porte = !empty($_SESSION["ferme_porte"]) ? $_SESSION['ferme_porte'] : false;
  $porte_formica=!empty($_SESSION["porte_formica"]) ? $_SESSION['porte_formica'] : false;
  $porte_polyrey=!empty($_SESSION["porte_polyrey"]) ? $_SESSION['porte_polyrey'] : false;
  $porte_egger=!empty($_SESSION["porte_egger"]) ? $_SESSION['porte_egger'] : false;
  $porte_vitre_simple=!empty($_SESSION["porte_vitre_simple"]) ? $_SESSION['porte_vitre_simple'] : false;
  $porte_vitre_double=!empty($_SESSION["porte_vitre_double"]) ? $_SESSION['porte_vitre_double'] : false;
  $porte_vitre_clarit=!empty($_SESSION["porte_vitre_clarit"]) ? $_SESSION['porte_vitre_clarit'] : false;
  $porte_finition_vitre_plein=!empty($_SESSION["porte_finition_vitre_plein"]) ? $_SESSION['porte_finition_vitre_plein'] : false;
  $porte_finition_vitre_vitre=!empty($_SESSION["porte_finition_vitre_vitre"]) ? $_SESSION['porte_finition_vitre_vitre'] : false;
  $porte_PV_standard=!empty($_SESSION["porte_PV_standard"]) ? $_SESSION['porte_PV_standard'] : false;

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
  
  createZip($zip,$dir);

  $zip->close();
}

// Create zip
function createZip($zip,$dir){
  if (is_dir($dir)){

    if ($dh = opendir($dir)){
       while (($file = readdir($dh)) !== false){
         if (is_file($dir.$file)) {
            if($file != '' && $file != '.' && $file != '..'){
               $zip->addFile($dir.$file);
            }
         }else{
            if(is_dir($dir.$file) ){
              if($file != '' && $file != '.' && $file != '..'){
                $zip->addEmptyDir($dir.$file);
                $folder = $dir.$file.'/';

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
/*** Evidence Couvre Joint***/
if($e_cj_p){
	$source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_plein.zip';	
    $destination = 'zip_fiches_techniques/evidence_Couvre joint_plein.zip';
	copy($source, $destination); 
}
if($e_cj_v || $e_cj_va){
	$source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_vitree.zip';	
    $destination = 'zip_fiches_techniques/evidence_Couvre joint_vitree.zip';
	copy($source, $destination); 
}
if($e_cj_melamine && $PV){
	$source = 'ZIP/Cloison Evidence Couvre joint/PV_evidence_Couvre joint_remplissage_plein-melamine.zip';	
    $destination = 'zip_fiches_techniques/PV_evidence_Couvre joint_remplissage_plein-melamine.zip';
	copy($source, $destination); 
}
if($e_cj_tole && $PV){
	$source = 'ZIP/Cloison Evidence Couvre joint/PV_evidence_Couvre joint_emplissage_plein-tole.zip';	
    $destination = 'zip_fiches_techniques/PV_evidence_Couvre joint_emplissage_plein-tole.zip';
	copy($source, $destination); 
}
if($e_cj_revetu && $PV){
	$source = 'ZIP/Cloison Evidence Couvre joint/PV_evidence_Couvre joint_remplissage_plein-revetu.zip';	
    $destination = 'zip_fiches_techniques/PV_evidence_Couvre joint_remplissage_plein-revetu.zip';
	copy($source, $destination); 
}

/*** Evidence Bord à Bord***/
if($e_bb_p){
	$source = 'ZIP/Cloison Evidence Bord à bord/evidence_Bord à bord_pleine.zip';	
    $destination = 'zip_fiches_techniques/evidence_Bord à bord_pleine.zip';
	copy($source, $destination); 
}
if($e_bb_v || $e_bb_va){
	$source = 'ZIP/Cloison Evidence Bord à bord/evidence_Bord à bord_vitree.zip';	
    $destination = 'zip_fiches_techniques/evidence_Bord à bord_vitree.zip';
	copy($source, $destination); 
}
if($e_bb_melamine && $PV){
	$source = 'ZIP/Cloison Evidence Bord à bord/PV_evidence_Bord à bord_remplissage_plein-melamine.zip';	
    $destination = 'zip_fiches_techniques/PV_evidence_Bord à bord_remplissage_plein-melamine.zip';
	copy($source, $destination); 
}
if($e_bb_tole && $PV){
	$source = 'ZIP/Cloison Evidence Bord à bord/PV_evidence_Bord à bord_remplissage_plein-tole.zip';	
    $destination = 'zip_fiches_techniques/PV_evidence_Bord à bord_remplissage_plein-tole.zip';
	copy($source, $destination); 
}

/*** Evidence Fournisseurs***/
if($e_cj){
    if($fournisseur_evidence_EGGER){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-melamine_Egger.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-melamine_Egger.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_POLYREY){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-melamine_Polyrey.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-melamine_Polyrey.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_UNILIN){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-melamine_Unilin.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-melamine_Unilin.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_toleComat){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-tole_comat.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-tole_comat.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_toleAgglo){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-tole_agglo.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-tole_agglo.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_Durafort){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-revetu_Durafort.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-revetu_Durafort.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_Muraspec){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-revetu_Muraspe_Panoline.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-revetu_Muraspe_Panoline.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_Pannex){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-revetu_Pannex.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-revetu_Pannex.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_Plastylon){
        $source = 'ZIP/Cloison Evidence Couvre joint/evidence_Couvre joint_remplissage_plein-revetu_Plastylon.zip';	
        $destination = 'zip_fiches_techniques/evidence_Couvre joint_remplissage_plein-revetu_Plastylon.zip';
        copy($source, $destination); 
    }
}
else if($e_bb){
    if($fournisseur_evidence_EGGER){
        $source = 'ZIP/Cloison Evidence Bord à bord/evidence_Bord à bord_remplissage_plein-melamine_Egger.zip';	
        $destination = 'zip_fiches_techniques/evidence_Bord à bord_remplissage_plein-melamine_Egger.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_POLYREY){
        $source = 'ZIP/Cloison Evidence Bord à bord/evidence_Bord à bord_remplissage_plein-melamine_Polyrey.zip';	
        $destination = 'zip_fiches_techniques/evidence_Bord à bord_remplissage_plein-melamine_Polyrey.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_UNILIN){
        $source = 'ZIP/Cloison Evidence Bord à bord/evidence_Bord à bord_remplissage_plein-melamine_Unilin.zip';	
        $destination = 'zip_fiches_techniques/evidence_Bord à bord_remplissage_plein-melamine_Unilin.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_toleComat){
        $source = 'ZIP/Cloison Evidence Bord à bord/evidence_Bord à bord_remplissage_plein-tole_comat.zip';	
        $destination = 'zip_fiches_techniques/evidence_Bord à bord_remplissage_plein-tole_comat.zip';
        copy($source, $destination); 
    }
    if($fournisseur_evidence_toleAgglo){
        $source = 'ZIP/Cloison Evidence Bord à bord/evidence_Bord à bord_remplissage_plein-tole_agglo.zip';	
        $destination = 'zip_fiches_techniques/evidence_Bord à bord_remplissage_plein-tole_agglo.zip';
        copy($source, $destination); 
    }
}

/*** Boréale ***/
if($boreale){
	$source = 'ZIP/Boreale/Boreale_vitre.zip';	
    $destination = 'zip_fiches_techniques/Boreale_vitre.zip';
	copy($source, $destination); 
}

if($PV){
    if($vitre_boreale_10mm){
        $source = 'pdfPV/boreale/Vitrage 10 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 10 mm Planiclear.pdf';
        copy($source, $destination);
    }
    if($vitre_boreale_12mm){
        $source = 'pdfPV/boreale/Vitrage 12 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 12 mm Planiclear.pdf';
        copy($source, $destination);
    }
    if($vitre_boreale_55_2F){
        $source = 'pdfPV/boreale/Feuilleté 55-2.pdf';	
        $destination = 'zip_fiches_techniques/PV/Feuilleté 55-2.pdf';
        copy($source, $destination); 
    }
    if($vitre_boreale_55_2SF){
        $source = 'pdfPV/boreale/Feuilleté 55-2 Silence.pdf';	
        $destination = 'zip_fiches_techniques/PV/Feuilleté 55-2 Silence.pdf';
        copy($source, $destination); 
    }
    if($vitre_boreale_66_2F){
        $source = 'pdfPV/boreale/Feuilleté 66-2.pdf';	
        $destination = 'zip_fiches_techniques/PV/Feuilleté 66-2.pdf';
        copy($source, $destination); 
    }
    if($vitre_boreale_66_2SF){
        $source = 'pdfPV/boreale/Feuilleté 66-2 Silence.pdf';	
        $destination = 'zip_fiches_techniques/PV/Feuilleté 66-2 Silence.pdf';
        copy($source, $destination); 
    }
}

/*** Evidence Box ***/
//TODO PV si mélaminé, absolument envoyer les 2 pdfEPDM
if($evidence_box){
    $source = 'ZIP/Evidence Box/Evidence Box.zip';	
    $destination = 'zip_fiches_techniques/Evidence Box.zip';
	copy($source, $destination);
}
if($face_plein_evidence_box_EGGER){
    $source = 'ZIP/Evidence Box/Evidence Box_melamine_Egger.zip';	
    $destination = 'zip_fiches_techniques/Evidence Box_melamine_Egger.zip';
	copy($source, $destination);
}
if($face_plein_evidence_box_Unilin){
    $source = 'ZIP/Evidence Box/Evidence Box_melamine_Unilin.zip';	
    $destination = 'zip_fiches_techniques/Evidence Box_melamine_Unilin.zip';
	copy($source, $destination);
}
if($face_plein_evidence_box_Polyrey){
    $source = 'ZIP/Evidence Box/Evidence Box_melamine_Polyrey.zip';	
    $destination = 'zip_fiches_techniques/Evidence Box_melamine_Polyrey.zip';
	copy($source, $destination);
}
if($PV){
    if($face_plein_evidence_box_EGGER || $face_plein_evidence_box_Unilin || $ace_plein_evidence_box_Polyrey ){
        $source = 'pdfPV/evidence_box/2 faces mela+ 1 EPDM (Ra=42db).pdf';	
        $destination = 'zip_fiches_techniques/PV/2 faces mela+ 1 EPDM (Ra=42db).pdf';
        copy($source, $destination); 
        $source = 'pdfPV/evidence_box/FDES EPDM.pdf';	
        $destination = 'zip_fiches_techniques/PV/FDES EPDM.pdf';
        copy($source, $destination); 
        $source = 'pdfPV/evidence_box/Fiche tech EPDM.pdf';	
        $destination = 'zip_fiches_techniques/PV/Fiche tech EPDM.pdf';
        copy($source, $destination); 
    }
    if($box_alta){
        $source = 'pdfPV/evidence_box/Vitrage 10 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 10 mm Planiclear.pdf';
        copy($source, $destination); 
        $source = 'pdfPV/evidence_box/Vitrage 12 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 12 mm Planiclear.pdf';
        copy($source, $destination); 
    }
    if($box_little){
        $source = 'pdfPV/evidence_box/Vitrage 6mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 6mm Planiclear.pdf';
        copy($source, $destination); 
        $source = 'pdfPV/evidence_box/Vitrage 8 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 8 mm Planiclear.pdf';
        copy($source, $destination); 
    }
    if($box_duo){
        $source = 'pdfPV/evidence_box/Vitrage 10 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 10 mm Planiclear.pdf';
        copy($source, $destination); 
        $source = 'pdfPV/evidence_box/Vitrage 12 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 12 mm Planiclear.pdf';
        copy($source, $destination); 
    }
    if($box_media){
        $source = 'pdfPV/evidence_box/Vitrage 10 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 10 mm Planiclear.pdf';
        copy($source, $destination); 
        $source = 'pdfPV/evidence_box/Vitrage 12 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 12 mm Planiclear.pdf';
        copy($source, $destination); 
    }
    if($box_grande){
        $source = 'pdfPV/evidence_box/Vitrage 10 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 10 mm Planiclear.pdf';
        copy($source, $destination); 
        $source = 'pdfPV/evidence_box/Vitrage 12 mm Planiclear.pdf';	
        $destination = 'zip_fiches_techniques/PV/Vitrage 12 mm Planiclear.pdf';
        copy($source, $destination); 
    }
}

/*** Portes ***/
if($porte_coulissante){
    $source = 'ZIP/Portes/Porte coulissante.zip';	
    $destination = 'zip_fiches_techniques/Porte coulissante.zip';
	copy($source, $destination);
}
if($porte_pleine && $PV){
    $source = 'ZIP/Portes/PV_Porte pleine.zip';	
    $destination = 'zip_fiches_techniques/PV_Porte pleine.zip';
	copy($source, $destination);
}
if($porte_pleine && $accessoire_bequillage){
    $source = 'ZIP/Portes/Porte pleine_Bequillage.zip';	
    $destination = 'zip_fiches_techniques/Porte pleine_Bequillage.zip';
	copy($source, $destination);
}
if($porte_bi_bois){
    $source = 'ZIP/Portes/Porte bi-affleurante_Bois.zip';	
    $destination = 'zip_fiches_techniques/Porte bi-affleurante_Bois.zip';
	copy($source, $destination);
    if($PV){
        $source = 'ZIP/Portes/PV_Porte bi-affleurante_Bois.zip';	
        $destination = 'zip_fiches_techniques/PV_Porte bi-affleurante_Bois.zip';
        copy($source, $destination);
    }
}
if($porte_bi_cadreAluminium && $porte_finition_vitre_plein){
    $source = 'ZIP/Portes/Porte bi-affleurante_Cadre alu_Peine.zip';	
    $destination = 'zip_fiches_techniques/Porte bi-affleurante_Cadre alu_Peine.zip';
	copy($source, $destination);
    if($PV){
        $source = 'ZIP/Portes/PV_Porte bi-affleurante_Cadre alu_Peine.zip';	
        $destination = 'zip_fiches_techniques/PV_Porte bi-affleurante_Cadre alu_Peine.zip';
        copy($source, $destination);
    }
}
if($porte_bi_cadreAluminium && $porte_finition_vitre_vitre){
    $source = 'ZIP/Portes/Porte bi-affleurante_Cadre alu_Vitree.zip';	
    $destination = 'zip_fiches_techniques/Porte bi-affleurante_Cadre alu_Vitree.zip';
	copy($source, $destination);
    if($PV){
        $source = 'ZIP/Portes/PV_Porte bi-affleurante_Cadre alu_Vitree.zip';	
        $destination = 'zip_fiches_techniques/PV_Porte bi-affleurante_Cadre alu_Vitree.zip';
        copy($source, $destination);
    }
}
if($porte_pleine && $porte_formica){
    $source = 'ZIP/Portes/Porte pleine_Stratifié_Formica.zip';	
    $destination = 'zip_fiches_techniques/Porte pleine_Stratifié_Formica.zip';
	copy($source, $destination);
}
if($porte_pleine && $porte_polyrey){
    $source = 'ZIP/Portes/Porte pleine_Stratifié_Polyrey.zip';	
    $destination = 'zip_fiches_techniques/Porte pleine_Stratifié_Polyrey.zip';
	copy($source, $destination);
}
if($porte_pleine && $porte_egger){
    $source = 'ZIP/Portes/Porte pleine_Stratifié_Egger.zip';	
    $destination = 'zip_fiches_techniques/Porte pleine_Stratifié_Egger.zip';
	copy($source, $destination);
}



/***** Code pour copier le contenu d'un dossier *****/
    /*$rootPath = realpath('pdfmodule/options_finitions/ecrimur');
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($rootPath),
        RecursiveIteratorIterator::LEAVES_ONLY
    );
    foreach ($files as $name => $file)
    {
        if (!$file->isDir())
        {
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($rootPath) + 1);
            $destination = 'zip_fiches_techniques/'.$relativePath;
            copy($filePath, $destination); 
        }
    }*/

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
            			
			if(e_cj_v){//Cloison Vitrée Couvre joint
            var slide = pptx.addSlide();
            slide.background = { path: "./ressources/pptx_placeholder/e_cj_v.png" };
			 slide.addText("<?php echo $_SESSION[hauteur]; ?>", {x: 6.5, y: 1.67, w: 1.0, h: 0.15, align: 'left',fontSize: 9, color: '555555', fill: 'ffffff'}).addText("<?php echo $_SESSION[ral]; ?>", {  x: 5.6, y: 1.97, w: 2.0, h: 0.15, align: 'left', fontSize: 9, color: '555555',fill: 'ffffff'}).addText("<?php echo$_SESSION["vitrePV"]; ?>", {x: 5.5, y: 3.0, w: 4.0, h: 0.15, align: 'left', fontSize: 9, color: '555555', fill: 'ffffff'});	
            }
			
			if(e_cj_va){//Cloison Vitrée sur Allège
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