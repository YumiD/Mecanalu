<?php
  session_start();

  if(!empty($_POST['previous'])) {    
    if ($_SESSION["buffer_portes_index"]>1){
      $_SESSION["buffer_portes_index"]--;
      echo "<script type='text/javascript'> document.location = '../portes_formulaire.php'; </script>";
    }
    else{
      echo "<script type='text/javascript'> document.location = '../portes.php'; </script>";
    }
  }
  else{

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

    if(isset($_POST['option']))
    {
        foreach($_POST['option'] as $option){
            if($option == "1") { 
              $_SESSION["accessoire_bequillage"] = true;
            } else if($option == "2" ) {
              $_SESSION["accessoire_paumelle_visibles"] = true;
            } else if( $option == "3") {    
              $_SESSION["accessoire_paumelle_invisibles"] = true;
            } else if($option == "4") {    
              $_SESSION["accessoire_serrure_standard"] = true;
            } else if($option == "5") {    
              $_SESSION["accessoire_serrure_magnetique"] = true;
            } else if($option == "6") {    
              $_SESSION["accessoire_oculus"] = true;
            }
        }
    }
    
    if(isset($_POST['ferme_porte']))
    {
        foreach($_POST['ferme_porte'] as $ferme_porte){
            if($ferme_porte == "1")   
                $_SESSION["ferme_porte_visible"] = true;
            else if($ferme_porte == "2")
                $_SESSION["ferme_porte_invisible"] = true;
        }
    }

    //Stratifié
    if(!empty($_POST['stratifie'])) {
      $select = $_POST['stratifie'];
      switch ($select) {
      case "formica":
        $_SESSION["porte_formica"] = true;
        break;
      case "polyrey":
        $_SESSION["porte_polyrey"] = true;
        break;
      case "egger":
        $_SESSION["porte_egger"] = true;
        break;
      default:
          break;
      }
    }

    //Vitré
    if(!empty($_POST['vitré'])) {
      $select = $_POST['vitré'];
      switch ($select) {
      case "vitre_simple":
        $_SESSION["porte_vitre_simple"] = true;
        break;
      case "vitre_double":
        $_SESSION["porte_vitre_double"] = true;
        break;
      case "vitre_clarit":
        $_SESSION["porte_vitre_clarit"] = true;
        break;
      default:
          break;
      }
    }

    //PV
    if(!empty($_POST['pv'])) {
      $select = $_POST['pv'];
      switch ($select) {
      case "standard":
        $_SESSION["porte_PV_standard"] = true;
        break;
      case "prema30":
        $_SESSION["porte_PV_prema30"] = true;
        break;
      case "prema35":
        $_SESSION["porte_PV_prema35"] = true;
        break;
      case "prema38":
        $_SESSION["porte_PV_prema38"] = true;
        break;
      case "prema39":
        $_SESSION["porte_PV_prema39"] = true;
        break;
      case "prema41":
        $_SESSION["porte_PV_prema41"] = true;
        break;
      case "DV73_1":
        $_SESSION["porte_PV_DV73_1"] = true;
        break;
      case "DV73_2":
        $_SESSION["porte_PV_DV73_2"] = true;
        break;
      case "DV73_3":
        $_SESSION["porte_PV_DV73_3"] = true;
        break;
      case "DV73_4":
        $_SESSION["porte_PV_DV73_4"] = true;
        break;
      default:
          break;
      }
    }

    //Finition Vitre
    if(!empty($_POST['finition_vitre'])) {
      $finition_vitre = $_POST['finition_vitre'];
      $N = count($finition_vitre);
      for($i=0; $i < $N; $i++)
      {
        if($finition_vitre[$i]=="plein"){
          $_SESSION["porte_finition_vitre_plein"] = true;
        }
        else if($finition_vitre[$i]=="vitre"){
          $_SESSION["porte_finition_vitre_vitre"] = true;
        }
      }
    }

    if($_SESSION["buffer_portes_index"]<$_SESSION["buffer_portes_size"]){
      $_SESSION["buffer_portes_index"]++;
      echo "<script type='text/javascript'> document.location = '../portes_formulaire.php'; </script>";
    }
    else{
      echo "<script type='text/javascript'> document.location = '../options.php'; </script>";
    }

  }


  

?>