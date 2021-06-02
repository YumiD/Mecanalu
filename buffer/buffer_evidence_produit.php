<?php
  session_start();

    if(isset($_POST['e_cj'])){
        $_SESSION["e_cj"] = true;
        $_SESSION['buffer_evidence_produit'][] = "e_cj";
    }
    else if($_SESSION["e_cj"]!=true)
        $_SESSION["e_cj"] = false;

    if(isset($_POST['e_bb'])){
        $_SESSION["e_bb"] = true;
        $_SESSION['buffer_evidence_produit'][] = "e_bb";
    }
    else if($_SESSION["e_bb"]!=true)
        $_SESSION["e_bb"] = false;

  if(empty($_SESSION['buffer_evidence_produit'])){
    echo "<script type='text/javascript'> document.location = 'buffer_gamme.php'; </script>";
  }
  else{
    $buffer_evidence_produit = array_shift($_SESSION['buffer_evidence_produit']);
    switch($buffer_evidence_produit){ //TODO Repetition, à enlever peut être plus tard
      case "e_cj":
        echo "<script type='text/javascript'> document.location = '../evidence/evidence_remplissage.php'; </script>";
        break;
      case "e_bb":
        echo "<script type='text/javascript'> document.location = '../evidence/evidence_remplissage.php'; </script>";
        break;
    }
  }
?>