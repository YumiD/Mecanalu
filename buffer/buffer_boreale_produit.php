<?php
  session_start();

  $_SESSION["buffer_boreale_produit_size"] = 0;
  $_SESSION["buffer_boreale_produit_index"] = 0;
  $_SESSION['buffer_boreale_produit']=array();

  if(isset($_POST['boreale_bb'])){
      $_SESSION["boreale_bb"] = true;
      $_SESSION['buffer_boreale_produit'][] = "boreale_bb";
      $_SESSION["buffer_boreale_produit_size"]++;
  }

  if(isset($_POST['boreale_verriere'])){
      $_SESSION["boreale_verriere"] = true;
      $_SESSION['buffer_boreale_produit'][] = "boreale_verriere";
      $_SESSION["buffer_boreale_produit_size"]++;
  }

  echo "<script type='text/javascript'> document.location = '../boreale/boreale_finition.php'; </script>";

?>