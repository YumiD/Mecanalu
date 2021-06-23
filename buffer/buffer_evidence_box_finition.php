<?php
  session_start();
  if(!empty($_POST['previous'])) {
    $_SESSION["buffer_evidence_box_finition_indexX"]=0;
    $_SESSION["buffer_evidence_box_finition_indexY"]=0;
    echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_remplissage.php'; </script>";
  }
  
  if($_SESSION["buffer_evidence_box_finition_indexX"] >= count($_SESSION['buffer_evidence_box_produit'])){
    echo "<script type='text/javascript'> document.location = '../buffer/buffer_gamme.php'; </script>";
  }


  $produit_final = $_SESSION['buffer_evidence_box_finition'][0];

  //RAL
  if(!empty($_POST['ral'])) {
    $select = $_POST['ral'];
    $session_ral = "ral_".$produit_final;
    switch ($select) {
    case "9010":
        $_SESSION["evidence_9010"] = true;
        $_SESSION[$session_ral] = "9010 Blanc";
        break;
    case "9005":
        $_SESSION["evidence_9005"] = true;
        $_SESSION[$session_ral] = "9005 Noir";
        break;
    case "9006":
        $_SESSION["evidence_9006"] = true;
        $_SESSION[$session_ral] = "9006 Gris";
        break;
    case "9007":
        $_SESSION["evidence_9007"] = true;
        $_SESSION[$session_ral] = "9007 Gris aluminium";
        break;
    case "7005":
        $_SESSION["evidence_7005"] = true;
        $_SESSION[$session_ral] = "7005 Gris souris";
        break;
    case "7016":
        $_SESSION["evidence_7016"] = true;
        $_SESSION[$session_ral] = "7016 Gris anthracite";
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
      $session_ral = "ral_".$produit_final;
      $_SESSION[$session_ral] = $_POST['ral_autre'];
      $_SESSION["ral"]= $_POST['ral_autre']; //TODO Supprimer
  }

//Face Pleine
if(!empty($_POST['face_plein'])) {
  $select = $_POST['face_plein'];
  switch ($select) {
  case "1":
    $_SESSION["face_plein_evidence_box_EGGER"] = true;
    break;
  case "2":
    $_SESSION["face_plein_evidence_box_Unilin"] = true;
    break;
  case "3":
    $_SESSION["face_plein_evidence_box_Polyrey"] = true;
    break;
  default:
      break;
  }
}
//Face Vitre
if(!empty($_POST['face_vitre'])) {
  $select = $_POST['face_vitre'];
  switch ($select) {
  case "1":
    $_SESSION["face_vitre_evidence_box_6_8"] = true;
    break;
  case "2":
    $_SESSION["face_vitre_evidence_box_10_12"] = true;
    break;
  default:
      break;
  }
}

  $X = $_SESSION["buffer_evidence_box_finition_indexX"];
  $Y = $_SESSION["buffer_evidence_box_finition_indexY"];
  $_SESSION['buffer_evidence_box_finition']=array();
  $_SESSION['buffer_evidence_box_finition'][0] = $_SESSION['buffer_evidence_box_produit'][$X];
  $_SESSION['buffer_evidence_box_finition'][1] = $_SESSION['buffer_evidence_box_remplissage'][$X][$Y];

  $_SESSION["buffer_evidence_box_finition_indexY"]++;
  if($_SESSION["buffer_evidence_box_finition_indexY"] >= count($_SESSION['buffer_evidence_box_remplissage'][$X])){
    $_SESSION["buffer_evidence_box_finition_indexX"]++;
    $_SESSION["buffer_evidence_box_finition_indexY"]=0;
  }

  echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_finition.php'; </script>";
      

?>