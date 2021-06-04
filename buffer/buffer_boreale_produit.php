<?php
  session_start();

  $_SESSION["buffer_boreale_produit_size"] = 0;
  $_SESSION["buffer_boreale_produit_index"] = 0;

  if(isset($_POST['boreale_bb'])){
      $_SESSION["boreale_bb"] = true;
      $_SESSION['buffer_boreale_produit'][] = "boreale_bb";
      $_SESSION["buffer_boreale_produit_size"]++;
  }
  else if($_SESSION["boreale_bb"]!=true)
      $_SESSION["boreale_bb"] = false;

  if(isset($_POST['boreale_verriere'])){
      $_SESSION["boreale_verriere"] = true;
      $_SESSION['buffer_boreale_produit'][] = "boreale_verriere";
      $_SESSION["buffer_boreale_produit_size"]++;
  }
  else if($_SESSION["boreale_verriere"]!=true)
      $_SESSION["boreale_verriere"] = false;

  echo "<script type='text/javascript'> document.location = '../boreale/boreale_finition.php'; </script>";

?>