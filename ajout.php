    
<?php
  session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Mecanalu - Ajout</title>
        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/gamme_evidence.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image2{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/gamme_boreale.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image3{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/gamme_evidence_box.png');
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
            <?php include('includes/header.html'); ?>
        </div> 

        <div id="content">
            <h3> Ajouter des produits à votre dossier </h3>
            <h4> Souhaitez-vous un autre produit?</h4>
            <form action="produit.php" method="post">
            <div id="horizontal"> 
                <div id="checkbox">
                    <input type="checkbox" id="evidence"  name="evidence" class="gamme"/>
                    <label for="evidence"><img src="ressources/gamme_evidence.png" /></label>
                    <input type="checkbox" id="boreale" name="boreale" class="gamme"/>
                    <label for="boreale"><img src="ressources/gamme_boreale.png" /></label>
                    <input type="checkbox" id="evidence_box" name="evidence_box" class="gamme"/>
                    <label for="evidence_box"><img src="ressources/gamme_evidence_box.png" /></label>
                </div>
                <div id="form">
                    <p><input type="submit" name="ajout" value="Ajouter" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';"></p>
                </div>
            </div>
            </form>
        </div>
    </body>

    <footer>
        <button id="buttonPasser" onclick="window.location.href='recapitulatif.php'">Passer</button>
        <!--<button onclick="window.location.href='evidence/evidence_options.php'">Précédent</button>-->
    </footer>
</html>