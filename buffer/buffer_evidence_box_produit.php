<?php
  session_start();

  $_SESSION["buffer_evidence_box_produit_size"] = 0;
  $_SESSION["buffer_evidence_box_produit_index"] = 0;


  if(isset($_POST['box_little'])){
    $_SESSION["box_little"] = true;
    $_SESSION['buffer_evidence_box_produit'][] = "box_little";
    $_SESSION["buffer_evidence_box_produit_size"]++;
  }
  else if($_SESSION["box_little"]!=true)
      $_SESSION["box_little"] = false;

  if(isset($_POST['box_duo'])){
    $_SESSION["box_duo"] = true;
    $_SESSION['buffer_evidence_box_produit'][] = "box_duo";
    $_SESSION["buffer_evidence_box_produit_size"]++;
  }
  else if($_SESSION["box_duo"]!=true)
      $_SESSION["box_duo"] = false;

  if(isset($_POST['box_media'])){
    $_SESSION["box_media"] = true;
    $_SESSION['buffer_evidence_box_produit'][] = "box_media";
    $_SESSION["buffer_evidence_box_produit_size"]++;
  }
  else if($_SESSION["box_media"]!=true)
      $_SESSION["box_media"] = false;

  if(isset($_POST['box_alta'])){
      $_SESSION["box_alta"] = true;
      $_SESSION['buffer_evidence_box_produit'][] = "box_alta";
      $_SESSION["buffer_evidence_box_produit_size"]++;
  }
  else if($_SESSION["box_alta"]!=true)
      $_SESSION["box_alta"] = false;

  if(isset($_POST['box_grande'])){
    $_SESSION["box_grande"] = true;
    $_SESSION['buffer_evidence_box_produit'][] = "box_grande";
    $_SESSION["buffer_evidence_box_produit_size"]++;
  }
  else if($_SESSION["box_grande"]!=true)
      $_SESSION["box_grande"] = false;

  $_SESSION['buffer_evidence_box_remplissage'] = array();
  for($i = 0; $i<$_SESSION["buffer_evidence_box_produit_size"]; $i++){
    $_SESSION['buffer_evidence_box_remplissage'][$i]=array();
  }

  echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_remplissage.php'; </script>";

?>