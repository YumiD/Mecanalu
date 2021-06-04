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

    if($_SESSION["buffer_portes_index"]<$_SESSION["buffer_portes_size"]){
      $_SESSION["buffer_portes_index"]++;
      echo "<script type='text/javascript'> document.location = '../portes_formulaire.php'; </script>";
    }
    else{
      echo "<script type='text/javascript'> document.location = '../options.php'; </script>";
    }

  }


  

?>