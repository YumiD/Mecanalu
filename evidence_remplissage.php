<?php
    session_start();

    if(!empty($_POST['produit'])) {    
        $produit = $_POST['produit'];
        $_SESSION["produit"] = $produit;
    }
    else $produit=$_SESSION["produit"];
    

    if($produit=="e_cj"){
        $nom_produit="Couvre joint";
    }
    else if($produit=="e_bb"){
        $nom_produit="Bord à Bord";
    }
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            .wrapper {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 10px;
                grid-auto-rows: minmax(100px, auto);
            }
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/plein.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 50%;
                height: 50%;}
            .image2{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/vitre.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 50%;
                height: 50%;}
        </style>
    </head>

    <body>
    <div class="header">
        <a href="index.php"> <img src="ressources/mecanalu.png"> </a>
    </div> 

    <div id="content">
        <h3> Choix du remplissage: </h3>
        <div class="wrapper">
            <div id="image_produit">
                <img src="ressources/<?php echo $produit; ?>.png">
            </div>
            <form action="evidence_finition.php" method="post">
            <input type="submit" id="horizontal_item" name="remplissage" value="plein" alt="Submit Form" class="image1"/>
            <input type="submit" id="horizontal_item" name="remplissage" value="vitre" alt="Submit Form"  class="image2"/>
            </form>
        </div>

    </div>
    </body>

    <footer>
        <button onclick="window.location.href='evidence_produit.php'">Précédent</button>
    </footer>
</html>