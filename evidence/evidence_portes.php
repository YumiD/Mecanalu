<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Récapitulatif</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/porte_bi.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image2{
                border:none;
                background-image:url('../ressources/porte_pleine.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image3{
                border:none;
                background-image:url('../ressources/porte_vitre.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;}
            .image4{
                border:none;
                background-image:url('../ressources/porte_coulissante.png');
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
            <a href="../index.php"> <img src="../ressources/mecanalu.png"> </a>
        </div> 
        
        <div id="content">
            <h3>EVIDENCE - CHOIX PORTE</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal"> <form action="evidence_portes_formulaire.php" method="post">
                <input type="submit" id="horizontal_item" name="porte" value="porte_bi" alt="Submit Form" class="image1"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_pleine" alt="Submit Form"  class="image2"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_vitre" alt="Submit Form"  class="image3"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_coulissante" alt="Submit Form"  class="image4"/>
            </form></div>
        </div>

    </body>

    <footer>
        <button onclick="window.location.href='evidence_finition.php'">Précédent</button>
    </footer>
</html>