<html>
    <?php
    session_start();

    $nom_entreprise = $_SESSION['nom_entreprise'];
    $nom_projet = $_SESSION['nom_projet'];
    $presentation = $_SESSION['presentation'];
    $fiche_technique = $_SESSION['fiche_technique'];
    $gamme = $_SESSION['gamme'];
    $nom_produit = $_SESSION['nom_produit'];  
    $nom_porte = $_SESSION['nom_porte'];

    if(!empty($_SESSION['nom_option'])) $nom_option = $_SESSION['nom_option'];
    else $nom_option = "";

    if(!empty($_SESSION['nom_accessoire'])) $nom_accessoire = $_SESSION['nom_accessoire'];
    else $nom_accessoire = "";

    ?>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Récapitulatif</title>
        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('ressources/icon/icon_powerpoint.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 80px;
                height: 80px;}
            .image2{
                border:none;
                background-image:url('ressources/icon/icon_zip.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 80px;
                height: 80px;}
        </style>
    </head>
    
    <body>
        <div class="header">
            <a href="index.php"> <img src="ressources/mecanalu.png"> </a>
        </div> 

        <div id="content">
            <h3> RECAPITULATIF DES ELEMENTS </h3>
            <h5> Récapitulatif des éléments choisis</h5>
            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
            <p> - Gamme : <?php echo $gamme; ?> </p>
            <p> - Produit : <?php echo $nom_produit; ?> </p>
            <p> - Porte : <?php echo $nom_porte; ?> </p>
            <p> - Option : <?php if($nom_option=="") echo "Aucun"; else echo $nom_option; ?> </p>
            <p> - Accessoire : <?php if($nom_accessoire=="") echo "Aucun"; else echo $nom_accessoire; ?> </p>
            <h5> Télécharger</h5>
            <!--<a href="creation.php"> <img style="width:80;height:80;margin-right:20px;" src="ressources/icon/icon_powerpoint.png"> </a>
            <a href="creation.php"> <img style="width:80;height:80;" src="ressources/icon/icon_zip.png"> </a>-->
            <form action="creation.php" method="post">
                <input type="submit" id="horizontal_item" name="pptx" value="icon_powerpoint" alt="Submit Form" class="image1"/>
                <input type="submit" id="horizontal_item" name="zip" value="icon_zip" alt="Submit Form"  class="image2"/>
            </form>
        </div>
    </body>

    <footer>
        <button onclick="window.location.href='ajout.php'">Précédent</button>
    </footer>
</html>