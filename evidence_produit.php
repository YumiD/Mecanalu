<?php
    session_start();
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/e_cj.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image2{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/e_bb.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
        </style>
    </head>

    <body>
    <div class="header">
        <a href="index.php"> <img src="ressources/mecanalu.png"> </a>
    </div> 

    <div id="content">
        <h3> Choix de la finition: </h3>
        <div id="horizontal"> <form action="evidence_remplissage.php" method="post">
            <input type="submit" id="horizontal_item" name="produit" value="e_cj" alt="Submit Form" class="image1"/>
            <input type="submit" id="horizontal_item" name="produit" value="e_bb" alt="Submit Form"  class="image2"/>
        </form></div>
    </div>
    </body>

    <footer>
        <button onclick="window.location.href='index.php'">Précédent</button>
    </footer>
</html>