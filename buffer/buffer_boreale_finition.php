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

        $_SESSION["buffer_boreale_produit_index"]++;
        
        if($_SESSION["buffer_boreale_produit_index"]<count($_SESSION['buffer_boreale_produit'])){
            echo "<script type='text/javascript'> document.location = '../boreale/boreale_finition.php'; </script>";
        }
        else{
            echo "<script type='text/javascript'> document.location = '../buffer/buffer_gamme.php'; </script>";
        }
    }
?>