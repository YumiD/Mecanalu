<?php
    session_start();


//**************IMAGE ENTREPRISE******************
    $target_dir = "uploads/";
    $_FILES["nom_entreprise_image"]["name"] = "nom_entreprise_image.png";
    $target_file = $target_dir . basename($_FILES["nom_entreprise_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["index_submit"])) {
        $check = getimagesize($_FILES["nom_entreprise_image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
  
  // Check file size
  if ($_FILES["nom_entreprise_image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    $_SESSION["nom_entreprise_image"]=true;
    if (move_uploaded_file($_FILES["nom_entreprise_image"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["nom_entreprise_image"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  //**************IMAGE PROJET*****************
    $target_dir = "uploads/";
    $_FILES["nom_projet_image"]["name"] = "nom_projet_image.png";
    $target_file = $target_dir . basename($_FILES["nom_projet_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["index_submit"])) {
        $check = getimagesize($_FILES["nom_projet_image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
  
  // Check file size
  if ($_FILES["nom_projet_image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    $_SESSION["nom_projet_image"]=true;
    if (move_uploaded_file($_FILES["nom_projet_image"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["nom_projet_image"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

//**************FORMULAIRE*****************
      
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