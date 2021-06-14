<?php
  session_start();

  if(!empty($_POST['previous'])) { 
      echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_produit.php'; </script>";
  }
  else{
    $index = $_SESSION["buffer_evidence_box_produit_index"];
    $evidence_produit = $_SESSION['buffer_evidence_box_produit'][$index];

    if(isset($_POST['box_remplissage_1'])){
      $_SESSION["box_remplissage_1"] = true;
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
        
    
    $_SESSION["buffer_evidence_box_finition_indexX"]=0;
    $_SESSION["buffer_evidence_box_finition_indexY"]=0;
    echo "<script type='text/javascript'> document.location = 'buffer_evidence_box_finition.php'; </script>";
      
  }
?>