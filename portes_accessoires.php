<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Récapitulatif</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/accessoire_bequillage.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image2{
                border:none;
                background-image:url('ressources/accessoire_paumelle.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image3{
                border:none;
                background-image:url('ressources/accessoire_serrure.png');
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
            <h3> Choix des accessoires</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal"> <form action="portes_accessoires_formulaire.php" method="post">
                <input type="submit" id="horizontal_item" name="accessoire" value="accessoire_bequillage" alt="Submit Form" class="image1"/>
                <input type="submit" id="horizontal_item" name="accessoire" value="accessoire_paumelle" alt="Submit Form"  class="image2"/>
                <input type="submit" id="horizontal_item" name="accessoire" value="accessoire_serrure" alt="Submit Form"  class="image3"/>
            </form></div>
            
            <div style="display:float;float:left;">
            <button style="border:none; background-color: #ffc000; color: #000000;" onclick="window.location.href='portes_accessoires.php'">Plinthe automatique</button>
            <button style="border:none; background-color: #ffc000; color: #000000;" onclick="window.location.href='portes_accessoires.php'">Ferme porte</button>
            </div>
        </div>

    </body>

    <footer>
        <button id="buttonPasser" onclick="window.location.href='ajout.php'">Passer</button>
        <button onclick="window.location.href='evidence/evidence_options_formulaire.php'">Précédent</button>
    </footer>
</html>