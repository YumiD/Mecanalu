<?php
  session_start();
    if(!empty($_POST['previous'])) {        
        if ($_SESSION["buffer_boreale_produit_index"]>0){
            $_SESSION["buffer_boreale_produit_index"]--;
            echo "<script type='text/javascript'> document.location = '../boreale/boreale_finition.php'; </script>";
        }
        else{
            echo "<script type='text/javascript'> document.location = '../boreale/boreale_produit.php'; </script>";
        }
    }
    else{

        $produit_final = $_SESSION['buffer_boreale_produit'][$_SESSION["buffer_boreale_produit_index"]];

        //Hauteur
        if(!empty($_POST['hauteur'])) {
            $hauteur = $_POST['hauteur'];
            /*if(intval($hauteur)>2600){ //TODO Hauteur max Boréale
                $hauteur="2600";
            }*/
            $session_hauteur = "hauteur_".$produit_final;
            $_SESSION[$session_hauteur] = $hauteur;
            $_SESSION["hauteur"] = $hauteur; 
          }
          else {
              $_SESSION["hauteur"]= "2600";
         }
        
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

        //Vitré
        if(!empty($_POST['vitre'])) {
            $select = $_POST['vitre'];
            switch ($select) {
            case "1":
            $_SESSION["vitre_boreale_10mm"] = true;
            break;
            case "2":
            $_SESSION["vitre_boreale_12mm"] = true;
            break;
            case "3":
            $_SESSION["vitre_boreale_15mm"] = true;
            break;
            case "4":
            $_SESSION["vitre_boreale_55_2F"] = true;
            break;
            case "5":
            $_SESSION["vitre_boreale_55_2SF"] = true;
            break;
            case "6":
            $_SESSION["vitre_boreale_66_2F"] = true;
            break;
            case "7":
            $_SESSION["vitre_boreale_66_2SF"] = true;
            break;
            default:
                break;
            }
        }

        //Finition vitré
        if(isset($_POST['trempe'])){
            $session_finition_vitre = "finition_vitre_".$produit_final;
            $_SESSION[$session_finition_vitre] = "trempe";
        }

        if(isset($_POST['feuillete'])){
            $session_finition_vitre = "finition_vitre_".$produit_final;
            $_SESSION[$session_finition_vitre] = "feuillete";
        }

        $_SESSION["buffer_boreale_produit_index"]++;
        
        if($_SESSION["buffer_boreale_produit_index"]<count($_SESSION['buffer_boreale_produit'])){
            echo "<script type='text/javascript'> document.location = '../boreale/boreale_finition.php'; </script>";
        }
        else{
            echo "<script type='text/javascript'> document.location = '../buffer/buffer_gamme.php'; </script>";
        }
    }
?>