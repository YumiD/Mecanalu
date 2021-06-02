<?php
    session_start();
    
    
    if(!empty($_POST['nom_entreprise'])) {    
        $nom_entreprise = $_POST['nom_entreprise'];
        $_SESSION["nom_entreprise"] = $nom_entreprise;
    }
    else $nom_entreprise=$_SESSION["nom_entreprise"];
    if(!empty($_POST['nom_projet'])) {    
        $nom_projet = $_POST['nom_projet'];
        $_SESSION["nom_projet"] = $nom_projet;
    }
    else $nom_projet=$_SESSION["nom_projet"];
    if(!empty($_POST['presentation'])) {    
        $presentation = $_POST['presentation'];
        $_SESSION["presentation"] = $presentation;
    }
    else $presentation=$_SESSION["presentation"];

    if(isset($_POST['fiche_technique']))
        $_SESSION["fiche_technique"] = true;
    else
        $_SESSION["fiche_technique"] = false;
    if(isset($_POST['PV']))
        $_SESSION["PV"] = true;
    else
        $_SESSION["PV"] = false;

    /*$_SESSION["gamme"]=""; 
    if(isset($_POST['evidence']))
        $_SESSION["gamme"] = "evidence";
    else if(isset($_POST['boreale']))
        $_SESSION["gamme"] = "boreale";
    else if(isset($_POST['evidence_box']))
        $_SESSION["gamme"] = "evidence_box";

    $gamme = $_SESSION["gamme"];

     if($gamme == "evidence"){
        $_SESSION["nom_gamme"] = "Evidence";
        echo "<script type='text/javascript'> document.location = 'evidence/evidence_produit.php'; </script>";
     }else if ($gamme == "boreale"){
        $_SESSION["nom_gamme"] = "Boréale";
        echo "<script type='text/javascript'> document.location = 'boreale/boreale_produit.php'; </script>";
     }else if ($gamme == "evidence_box"){
        $_SESSION["nom_gamme"] = "Evidence Box";
        echo "<script type='text/javascript'> document.location = 'evidence_box/evidence_box_produit.php'; </script>";
     }*/
    $_SESSION['buffer_gamme'] = array();

    if(isset($_POST['evidence'])){
        $_SESSION["evidence"] = true;
        $_SESSION['buffer_gamme'][] = "evidence";
    }
    else
        $_SESSION["evidence"] = false;

    if(isset($_POST['boreale'])){
        $_SESSION["boreale"] = true;
        $_SESSION['buffer_gamme'][] = "boreale";
    }
    else
        $_SESSION["boreale"] = false;

    if(isset($_POST['evidence_box'])){
        $_SESSION["evidence_box"] = true;
        $_SESSION['buffer_gamme'][] = "evidence_box";
    }
    else
        $_SESSION["evidence_box"] = false;

    if(empty($_SESSION['buffer_gamme']))
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    else
        echo "<script type='text/javascript'> document.location = 'buffer/buffer_gamme.php'; </script>";
    
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Choix du produit</title>
    </head>
    
    <body>
    <div class="header">
      <?php include('includes/header.html'); ?>
    </div> 

    <div id="content">
        <h3> Choix du produit</h3>

    </div>
    </body>

    <footer>
        <button onclick="window.location.href='index.php'">Précédent</button>
    </footer>
</html>