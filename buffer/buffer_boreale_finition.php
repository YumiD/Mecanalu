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
        $_SESSION["buffer_boreale_produit_index"]++;
        
        if($_SESSION["buffer_boreale_produit_index"]<count($_SESSION['buffer_boreale_produit'])){
            echo "<script type='text/javascript'> document.location = '../boreale/boreale_finition.php'; </script>";
        }
        else{
            echo "<script type='text/javascript'> document.location = '../buffer/buffer_gamme.php'; </script>";
        }
    }
?>