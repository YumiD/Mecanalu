<?php
  session_start();
  $index = $_SESSION["buffer_evidence_produit_index"];
  $evidence_produit = $_SESSION['buffer_evidence_produit'][$index];

  if(isset($_POST['e_plein'])){
    $_SESSION["e_plein"] = true;
    if($evidence_produit=="e_cj"){
      $_SESSION["e_cj_p"] = true;
    }
    else if($evidence_produit=="e_bb"){
      $_SESSION["e_bb_p"] = true;
    }
    $_SESSION['buffer_evidence_remplissage'][$index][] = "e_plein";
  }

  if(isset($_POST['e_vitre'])){
      $_SESSION["e_vitre"] = true;
      if($evidence_produit=="e_cj"){
        $_SESSION["e_cj_v"] = true;
      }
      else if($evidence_produit=="e_bb"){
        $_SESSION["e_bb_v"] = true;
      }
      $_SESSION['buffer_evidence_remplissage'][$index][] = "e_vitre";
  }

  if(isset($_POST['e_vitre_allege'])){
    $_SESSION["e_vitre_allege"] = true;
    if($evidence_produit=="e_cj"){
      $_SESSION["e_cj_va"] = true;
    }
    else if($evidence_produit=="e_bb"){
      $_SESSION["e_bb_va"] = true;
    }
    $_SESSION['buffer_evidence_remplissage'][$index][] = "e_vitre_allege";
  }
      
  $_SESSION["buffer_evidence_produit_index"]++;
  if($_SESSION["buffer_evidence_produit_index"]<$_SESSION["buffer_evidence_produit_size"]){
    echo "<script type='text/javascript'> document.location = '../evidence/evidence_remplissage.php'; </script>";
  }
  else{
    if(empty($_SESSION["e_plein"]))
      $_SESSION["e_plein"] = false;
    if(empty($_SESSION["e_vitre"]))
      $_SESSION["e_vitre"] = false;
    if(empty($_SESSION["e_vitre_allege"]))
      $_SESSION["e_vitre_allege"] = false;

    if(empty($_SESSION["e_cj_p"]))
      $_SESSION["e_cj_p"] = false;
    if(empty($_SESSION["e_bb_p"]))
      $_SESSION["e_bb_p"] = false;
    if(empty($_SESSION["e_cj_v"]))
      $_SESSION["e_cj_v"] = false;
    if(empty($_SESSION["e_bb_v"]))
      $_SESSION["e_bb_v"] = false;
    if(empty($_SESSION["e_cj_va"]))
      $_SESSION["e_cj_va"] = false;
    if(empty($_SESSION["e_bb_va"]))
      $_SESSION["e_bb_va"] = false;
      
    $_SESSION["buffer_evidence_finition_indexX"]=0;
    $_SESSION["buffer_evidence_finition_indexY"]=0;
    echo "<script type='text/javascript'> document.location = 'buffer_evidence_finition.php'; </script>";
  }
?>