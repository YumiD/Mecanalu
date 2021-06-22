<?php
  session_start();
  if(!empty($_POST['previous'])) {  
    $_SESSION["buffer_evidence_finition_indexX"]=0;
    $_SESSION["buffer_evidence_finition_indexY"]=0;
  }

  $produit = $_SESSION['buffer_evidence_finition'][0];
  $remplissage = $_SESSION['buffer_evidence_finition'][1];
  if($produit=="e_cj"){
    if($remplissage=="e_plein"){
        $produit_final="e_cj_p";
    }else if($remplissage=="e_vitre"){
        $produit_final="e_cj_v";
    }else if($remplissage=="e_vitre_allege" ){
        $produit_final="e_cj_va";
    }
  }
  else if($produit=="e_bb"){
      if($remplissage=="e_plein"){
          $produit_final="e_bb_p";
      }else if($remplissage=="e_vitre"){
          $produit_final="e_bb_v";
      }else if($remplissage=="e_vitre_allege"){
          $produit_final="e_bb_va";
      }
  }
  
 if(!empty($_POST['hauteur'])) {
    $hauteur = $_POST['hauteur'];
    $session_hauteur = "hauteur_".$produit_final;
    $_SESSION[$session_hauteur] = $hauteur;
    $_SESSION["hauteur"] = $hauteur; 
  }
  else {
	  $_SESSION["hauteur"]= "2600";
 }
  
//RAL CJ
  if(!empty($_POST['ral'])) {
    $select = $_POST['ral'];
    $session_ral = "ral_".$produit_final;
    switch ($select) {
    case "9010":
        $_SESSION["evidence_9010"] = true;
        $_SESSION[$session_ral] = "9010 Blanc";
        break;
    case "9005":
        $_SESSION["evidence_9005"] = true;
        $_SESSION[$session_ral] = "9005 Noir";
        break;
    case "9006":
        $_SESSION["evidence_9006"] = true;
        $_SESSION[$session_ral] = "9006 Gris";
        break;
    case "9007":
        $_SESSION["evidence_9007"] = true;
        $_SESSION[$session_ral] = "9007 Gris aluminium";
        break;
    case "7005":
        $_SESSION["evidence_7005"] = true;
        $_SESSION[$session_ral] = "7005 Gris souris";
        break;
    case "7016":
        $_SESSION["evidence_7016"] = true;
        $_SESSION[$session_ral] = "7016 Gris anthracite";
        break;
    default:
	      $_SESSION["ral"]= "standard";
        break;
    }
  }
  else {
	  $_SESSION["ral"]= "standard";
  }
  if(!empty($_POST['ral_autre'])) {
	  $_SESSION["ral"]= $_POST['ral_autre'];
  }
 
//Plein
if(!empty($_POST['plein'])) {
  $select = $_POST['plein'];
  switch ($select) {
  case "1":
    $_SESSION["e_cj_melamine"] = true;
    break;
  case "2":
    $_SESSION["e_cj_tole"] = true;
    break;
  case "3":
    $_SESSION["e_cj_revetu"] = true;
    break;
  case "4":
    $_SESSION["e_bb_melamine"] = true;
    break;
  case "5":
    $_SESSION["e_bb_tole"] = true;
    break;
  default:
      break;
  }
}

//Fournisseur
if(!empty($_POST['fournisseur'])) {
  $select = $_POST['fournisseur'];
  switch ($select) {
  case "1":
    $_SESSION["fournisseur_evidence_EGGER"] = true;
    break;
  case "2":
    $_SESSION["fournisseur_evidence_POLYREY"] = true;
    break;
  case "3":
    $_SESSION["fournisseur_evidence_UNILIN"] = true;
    break;
  case "4":
    $_SESSION["fournisseur_evidence_toleComat"] = true;
    break;
  case "5":
    $_SESSION["fournisseur_evidence_toleAgglo"] = true;
    break;
  case "6":
    $_SESSION["fournisseur_evidence_Durafort"] = true;
    break;
  case "7":
    $_SESSION["fournisseur_evidence_Muraspec"] = true;
    break;
  case "8":
    $_SESSION["fournisseur_evidence_Pannex"] = true;
    break;
  case "9":
    $_SESSION["fournisseur_evidence_Plastylon"] = true;
    break;
  default:
      break;
  }
}

if(!empty($_POST['pleinPV'])) {
  $select = $_POST['pleinPV'];
  switch ($select) {
    case "1":
    $_SESSION["pleinPV_cj_melamine_1"] = true;
    break;
    case "2":
    $_SESSION["pleinPV_cj_melamine_2"] = true;
    break;
    case "3":
    $_SESSION["pleinPV_cj_melamine_3"] = true;
    break;
    case "4":
    $_SESSION["pleinPV_cj_melamine_4"] = true;
    break;
    case "5":
    $_SESSION["pleinPV_cj_melamine_5"] = true;
    break;
    case "6":
    $_SESSION["pleinPV_cj_tole_1"] = true;
    break;
    case "7":
    $_SESSION["pleinPV_cj_tole_2"] = true;
    break;
    case "8":
    $_SESSION["pleinPV_cj_tole_3"] = true;
    break;
    case "9":
    $_SESSION["pleinPV_cj_tole_4"] = true;
    break;
    case "10":
    $_SESSION["pleinPV_cj_revetu_1"] = true;
    break;
    case "11":
    $_SESSION["pleinPV_cj_revetu_2"] = true;
    break;
    case "12":
    $_SESSION["pleinPV_cj_revetu_3"] = true;
    break;
    case "13":
    $_SESSION["pleinPV_cj_revetu_4"] = true;
    break;
    case "14":
    $_SESSION["pleinPV_cj_revetu_5"] = true;
    break;
    case "15":
    $_SESSION["pleinPV_cj_revetu_6"] = true;
    break;
    case "16":
    $_SESSION["pleinPV_cj_revetu_7"] = true;
    break;
    case "17":
    $_SESSION["pleinPV_cj_revetu_8"] = true;
    break;
    case "18":
    $_SESSION["pleinPV_bb_melamine_1"] = true;
    break;
    case "19":
    $_SESSION["pleinPV_bb_melamine_2"] = true;
    break;
    case "20":
    $_SESSION["pleinPV_bb_melamine_3"] = true;
    break;
    case "21":
    $_SESSION["pleinPV_bb_melamine_4"] = true;
    break;
    case "22":
    $_SESSION["pleinPV_bb_melamine_5"] = true;
    break;
    case "23":
    $_SESSION["pleinPV_bb_tole_1"] = true;
    break;
    case "24":
    $_SESSION["pleinPV_bb_tole_2"] = true;
    break;
    case "25":
    $_SESSION["pleinPV_bb_tole_3"] = true;
    break;
    case "26":
    $_SESSION["pleinPV_bb_tole_4"] = true;
    break;
    case "27":
    $_SESSION["pleinPV_bb_tole_5"] = true;
    break;
    case "28":
    $_SESSION["pleinPV_bb_tole_6"] = true;
    break;
    case "29":
    $_SESSION["pleinPV_bb_tole_7"] = true;
    break;
    case "30":
    $_SESSION["pleinPV_bb_tole_8"] = true;
    break;
    default:
        break;
  }
}

if(!empty($_POST['vitrePV'])) {
  $select = $_POST['vitrePV'];
  switch ($select) {
    case "1":
    $_SESSION["vitrePV_cj_1"] = true;
    break;
    case "2":
    $_SESSION["vitrePV_cj_2"] = true;
    break;
    case "3":
    $_SESSION["vitrePV_cj_3"] = true;
    break;
    case "4":
    $_SESSION["vitrePV_cj_4"] = true;
    break;
    case "5":
    $_SESSION["vitrePV_bb_1"] = true;
    break;
    case "6":
    $_SESSION["vitrePV_bb_2"] = true;
    break;
    case "7":
    $_SESSION["vitrePV_bb_3"] = true;
    break;
    case "8":
    $_SESSION["vitrePV_bb_4"] = true;
    break;
    default:
        break;
  }
}

//Plein PV  CJ
  if(!empty($_POST['pleinPV'])) {

         $_SESSION["pleinPV"]= $_POST['pleinPV'];
  }
    else {
	  $_SESSION["pleinPV"]= "standard";
 }
 
//Vitré PV CJ
   if(!empty($_POST['vitrePV'])) {

         $_SESSION["vitrePV"]= $_POST['vitrePV'];
  }
    else {
	  $_SESSION["vitrePV"]= "standard";
 }
  
  
  
  if($_SESSION["buffer_evidence_finition_indexX"] >= count($_SESSION['buffer_evidence_produit'])){
    echo "<script type='text/javascript'> document.location = '../buffer/buffer_gamme.php'; </script>";
  }

  $X = $_SESSION["buffer_evidence_finition_indexX"];
  $Y = $_SESSION["buffer_evidence_finition_indexY"];
  $_SESSION['buffer_evidence_finition']=array();
  $_SESSION['buffer_evidence_finition'][0] = $_SESSION['buffer_evidence_produit'][$X];
  $_SESSION['buffer_evidence_finition'][1] = $_SESSION['buffer_evidence_remplissage'][$X][$Y];

  $_SESSION["buffer_evidence_finition_indexY"]++;
  if($_SESSION["buffer_evidence_finition_indexY"] >= count($_SESSION['buffer_evidence_remplissage'][$X])){
    $_SESSION["buffer_evidence_finition_indexX"]++;
    $_SESSION["buffer_evidence_finition_indexY"]=0;
  }

  echo "<script type='text/javascript'> document.location = '../evidence/evidence_finition.php'; </script>";
      

?>