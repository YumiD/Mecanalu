<?php
  session_start();
  $index = $_SESSION["buffer_evidence_produit_index"];

  if(isset($_POST['e_plein'])){
    $_SESSION["e_plein"] = true;
    $_SESSION['buffer_evidence_remplissage'][$index][] = "e_plein";
  }
  else if($_SESSION["e_plein"]!=true)
      $_SESSION["e_plein"] = false;

  if(isset($_POST['e_vitre'])){
      $_SESSION["e_vitre"] = true;
      $_SESSION['buffer_evidence_remplissage'][$index][] = "e_vitre";
  }
  else if($_SESSION["e_vitre"]!=true)
      $_SESSION["e_vitre"] = false;

  if(isset($_POST['e_vitre_allege'])){
    $_SESSION["e_vitre_allege"] = true;
    $_SESSION['buffer_evidence_remplissage'][$index][] = "e_vitre_allege";
  }
  else if($_SESSION["e_vitre_allege"]!=true)
      $_SESSION["e_vitre_allege"] = false;
      
  $_SESSION["buffer_evidence_produit_index"]++;
  if($_SESSION["buffer_evidence_produit_index"]<$_SESSION["buffer_evidence_produit_size"]){
    echo "<script type='text/javascript'> document.location = '../evidence/evidence_remplissage.php'; </script>";
  }
  else{
    $_SESSION["buffer_evidence_finition_indexX"]=0;
    $_SESSION["buffer_evidence_finition_indexY"]=0;
    echo "<script type='text/javascript'> document.location = 'buffer_evidence_finition.php'; </script>";
  }
?>