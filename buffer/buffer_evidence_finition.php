<?php
  session_start();
  if(!empty($_POST['previous'])) {    
    /*if($_SESSION["buffer_evidence_finition_indexX"] >= count($_SESSION['buffer_evidence_produit'])){
      $_SESSION["buffer_evidence_finition_indexX"]--;
      $_SESSION["buffer_evidence_finition_indexY"]= count($_SESSION['buffer_evidence_remplissage'][$_SESSION["buffer_evidence_finition_indexX"]])-1;
      echo "<script type='text/javascript'> document.location = '../evidence/evidence_finition.php'; </script>";
    }
    else if ($_SESSION["buffer_evidence_finition_indexY"]>0){
      $_SESSION["buffer_evidence_finition_indexY"]--;
      echo "<script type='text/javascript'> document.location = '../evidence/evidence_finition.php'; </script>";
    }
    else if($_SESSION["buffer_evidence_finition_indexY"]<=0 && $_SESSION["buffer_evidence_finition_indexX"]>0){
      $_SESSION["buffer_evidence_finition_indexX"]--;
      echo "<script type='text/javascript'> document.location = '../evidence/evidence_finition.php'; </script>";
    }
    else{
      $_SESSION["buffer_evidence_produit_index"]--;
      echo "<script type='text/javascript'> document.location = '../evidence/evidence_remplissage.php'; </script>";
    }*/
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

         $_SESSION["ral"]= $_POST['ral'];
  }
  else {
	  $_SESSION["ral"]= "standard";
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