<?php
  session_start();

  if(isset($_POST['porte_pleine'])){
    $_SESSION["porte_pleine"] = true;
    $_SESSION['buffer_portes'][] = "porte_pleine";
    $_SESSION['buffer_portes_size']++;
  }

  if(isset($_POST['porte_vitre'])){
    $_SESSION["porte_vitre"] = true;
    $_SESSION['buffer_portes'][] = "porte_vitre";
    $_SESSION['buffer_portes_size']++;
  }

  if(isset($_POST['porte_coulissante'])){
    $_SESSION["porte_coulissante"] = true;
    $_SESSION['buffer_portes'][] = "porte_coulissante";
    $_SESSION['buffer_portes_size']++;
  }

  if(isset($_POST['porte_bi_cadreAluminium'])){
    $_SESSION["porte_bi_cadreAluminium"] = true;
    $_SESSION['buffer_portes'][] = "porte_bi_cadreAluminium";
    $_SESSION['buffer_portes_size']++;
  }

  if(isset($_POST['porte_bi_bois'])){
    $_SESSION["porte_bi_bois"] = true;
    $_SESSION['buffer_portes'][] = "porte_bi_bois";
    $_SESSION['buffer_portes_size']++;
  }

  if(isset($_POST['porte_bi'])){
    echo "<script type='text/javascript'> document.location = '../portes_bi.php'; </script>";
  }

  if($_SESSION["buffer_portes_index"]<$_SESSION["buffer_portes_size"]){
    $_SESSION["buffer_portes_index"]++;
    echo "<script type='text/javascript'> document.location = '../portes_formulaire.php'; </script>";
  }
  else{
    echo "<script type='text/javascript'> document.location = '../options.php'; </script>";
  }


  

?>