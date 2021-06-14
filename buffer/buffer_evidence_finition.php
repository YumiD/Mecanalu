<?php
  session_start();
  if(!empty($_POST['previous'])) {  
    $_SESSION["buffer_evidence_finition_indexX"]=0;
    $_SESSION["buffer_evidence_finition_indexY"]=0;
  }
  
 if(!empty($_POST['hauteur'])) {

         $_SESSION["hauteur"]= $_POST['hauteur'];
  }
  else {
	  $_SESSION["hauteur"]= "2600";
 }
  
//RAL CJ
  if(!empty($_POST['ral'])) {
    $select = $_POST['ral'];
    switch ($select) {
    case "9010":
        $_SESSION["evidence_9010"] = true;
        break;
    case "9005":
        $_SESSION["evidence_9005"] = true;
        break;
    case "9006":
        $_SESSION["evidence_9006"] = true;
        break;
    case "9007":
        $_SESSION["evidence_9007"] = true;
        break;
    case "7005":
        $_SESSION["evidence_7005"] = true;
        break;
    case "7016":
        $_SESSION["evidence_7016"] = true;
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