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
            <div id="horizontal"> <form action="produit.php" method="post">
                <input type="submit" id="horizontal_item" name="evidence" value="gamme_evidence" alt="Submit Form" class="image1"/>
                <input type="submit" id="horizontal_item" name="boreale" value="gamme_boreale" alt="Submit Form"  class="image2"/>
                <input type="submit" id="horizontal_item" name="evidence_box" value="gamme_evidence_box" alt="Submit Form"  class="image3"/>
            </form></div>
        </div>
    </body>

    <footer>
        <button id="buttonPasser" onclick="window.location.href='recapitulatif.php'">Passer</button>
        <!--<button onclick="window.location.href='evidence/evidence_options.php'">Précédent</button>-->
    </footer>
</html>