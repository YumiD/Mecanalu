<?php
  session_start();

  if(empty($_SESSION['buffer_gamme'])){
    echo "Empty";
    echo "<script type='text/javascript'> document.location = '../portes.php'; </script>";
  }
  else{
    $removed = array_shift($_SESSION['buffer_gamme']);
   /* foreach ($_SESSION['buffer_gamme'] as $key => $value)
    {
      echo $value;
    } */
    switch($removed){
      case "evidence":
        echo "<script type='text/javascript'> document.location = '../evidence/evidence_produit.php'; </script>";
        break;
      case "boreale":
        echo "<script type='text/javascript'> document.location = '../boreale/boreale_produit.php'; </script>";
        break;
      case "evidence_box":
        echo "<script type='text/javascript'> document.location = '../evidence_box/evidence_box_produit.php'; </script>";
        break;

    }
  }
?>