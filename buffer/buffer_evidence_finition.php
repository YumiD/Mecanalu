<?php
  session_start();
  /*foreach ($_SESSION['buffer_evidence_remplissage'][0] as $key => $value)
  {
      echo "\n";
      echo $value;
  }
  foreach ($_SESSION['buffer_evidence_remplissage'][1] as $key => $value)
  {
      echo "\n";
      echo $value;
  }*/
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