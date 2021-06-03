<?php
  session_start();

  if($_SESSION['buffer_gamme_index']<$_SESSION['buffer_gamme_size']){
    $gamme = $_SESSION['buffer_gamme'][$_SESSION['buffer_gamme_index']];
    $_SESSION['buffer_gamme_index']++;
    
    switch($gamme){
      case "evidence":
        $_SESSION['buffer_evidence_produit']=array();
        echo "<script type='text/javascript'> document.location = '../evidence/evidence_produit.php'; </script>";
        break;
      case "boreale":
        $_SESSION['buffer_boreale_produit']=array();
        echo "<script type='text/javascript'> document.location = '../boreale/boreale_produit.php'; </script>";
        break;
      case "evidence_box":
        $_SESSION['buffer_evidence_box_produit']=array();
        echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_produit.php'; </script>";
        break;

    }
  }
  else{
    echo "<script type='text/javascript'> document.location = '../portes.php'; </script>";
  }
?>