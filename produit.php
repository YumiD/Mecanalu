<?php
    session_start();
    
    if(!empty($_POST['ajout']) && !isset($_POST['evidence']) && isset($_POST['boreale']) && isset($_POST['evidence_box']))
        echo "<script type='text/javascript'> document.location = 'recapitulatif.php'; </script>";
    
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

    if(empty($_SESSION['buffer_gamme'])){
        if(!empty($_POST['ajout']))
            echo "<script type='text/javascript'> document.location = 'recapitulatif.php'; </script>";
        else
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    }else{
        $_SESSION['buffer_gamme_index']=0;
        $_SESSION['buffer_gamme_size']=count($_SESSION['buffer_gamme']);
        echo "<script type='text/javascript'> document.location = 'buffer/buffer_gamme.php'; </script>";
    }
    
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Mecanalu - Choix du produit</title>
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