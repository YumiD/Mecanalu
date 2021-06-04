<?php
  session_start();

  if(!empty($_POST['previous'])) {    
    if ($_SESSION["buffer_evidence_box_produit_index"]>0){
      $_SESSION["buffer_evidence_box_produit_index"]--;
      echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_remplissage.php'; </script>";
    }
    else{
      echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_produit.php'; </script>";
    }
  }
  else{
    $index = $_SESSION["buffer_evidence_box_produit_index"];
    $evidence_produit = $_SESSION['buffer_evidence_box_produit'][$index];

    if(isset($_POST['box_remplissage_1'])){
      $_SESSION["box_remplissage_1"] = true;
      if($evidence_produit=="box_alta"){
        $_SESSION["box_alta_1"] = true;
      }
      else if($evidence_produit=="box_duo"){
        $_SESSION["box_duo_1"] = true;
      }
      else if($evidence_produit=="box_grande"){
        $_SESSION["box_grande_1"] = true;
      }
      else if($evidence_produit=="box_little"){
        $_SESSION["box_little_1"] = true;
      }
      else if($evidence_produit=="box_media"){
        $_SESSION["box_media_1"] = true;
      }
      //$_SESSION['buffer_evidence_box_remplissage'][$index][] = "box_remplissage_1";
    }
    if(isset($_POST['box_remplissage_2'])){
      $_SESSION["box_remplissage_2"] = true;
      //$_SESSION['buffer_evidence_box_remplissage'][$index][] = "box_remplissage_2";
    }
    if(isset($_POST['box_remplissage_3'])){
      $_SESSION["box_remplissage_3"] = true;
      //$_SESSION['buffer_evidence_box_remplissage'][$index][] = "box_remplissage_3";
    }
    if(isset($_POST['box_remplissage_4'])){
      $_SESSION["box_remplissage_4"] = true;
      //$_SESSION['buffer_evidence_box_remplissage'][$index][] = "box_remplissage_4";
    }
        
    $_SESSION["buffer_evidence_box_produit_index"]++;
    if($_SESSION["buffer_evidence_box_produit_index"]<$_SESSION["buffer_evidence_box_produit_size"]){
      echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_remplissage.php'; </script>";
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
        
      $_SESSION["buffer_evidence_box_finition_indexX"]=0;
      $_SESSION["buffer_evidence_box_finition_indexY"]=0;
      echo "<script type='text/javascript'> document.location = 'buffer_evidence_box_finition.php'; </script>";
    }
      
  }
?>