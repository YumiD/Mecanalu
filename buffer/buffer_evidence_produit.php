<?php
  session_start();

  $_SESSION["buffer_evidence_produit_size"] = 0;
  $_SESSION["buffer_evidence_produit_index"] = 0;

  if(isset($_POST['e_cj'])){
      $_SESSION["e_cj"] = true;
      $_SESSION['buffer_evidence_produit'][] = "e_cj";
      $_SESSION["buffer_evidence_produit_size"]++;
  }
  else if($_SESSION["e_cj"]!=true)
      $_SESSION["e_cj"] = false;

  if(isset($_POST['e_bb'])){
      $_SESSION["e_bb"] = true;
      $_SESSION['buffer_evidence_produit'][] = "e_bb";
      $_SESSION["buffer_evidence_produit_size"]++;
  }
  else if($_SESSION["e_bb"]!=true)
      $_SESSION["e_bb"] = false;

  $_SESSION['buffer_evidence_remplissage'] = array();
  for($i = 0; $i<$_SESSION["buffer_evidence_produit_size"]; $i++){
    $_SESSION['buffer_evidence_remplissage'][$i]=array();
  }

  echo "<script type='text/javascript'> document.location = '../evidence/evidence_remplissage.php'; </script>";

?>