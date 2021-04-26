<?php
    session_start();
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/e_cj.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 60%;
				max-width: 350px;
                max-height:506px;
                width: 100%;
                height: 100%;;
				margin-top: 4%;
				cursor: pointer;}
            .image2{
                border:none;
                background-image:url('../ressources/e_bb.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 100%;
                height: 100%;
				margin-top: 4%;
				cursor: pointer;}
        </style>
    </head>

    <body id="page">

	<div class="header">
		<p class="top"><a href="index.php"> <img src="../ressources/mecanalu.png"> </a></p>
		
		<div id="menu"><ul>
		<li><a href="https://www.mecanalu.com/">Accueil</a></li>
		<li><a href="https://www.mecanalu.com/produits">Produits</a></li>
		<li><a href="https://www.mecanalu.com/ambiances">Ambiances</a></li>
		<li><a href="https://www.mecanalu.com/societe">Société</a></li>
		<li><a href="https://www.mecanalu.com/catalogues">Catalogues</a></li>
		<li><a href="https://www.mecanalu.com/contact">Contact</a></li>
		<li><a href="http://dev.mecanalu.com/auth/login" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;">Portail Client</a></li>
		</ul>
		</div>
		
	</div> 

    <div id="content">
        <h3> Choix de la finition</h3>
        <h4> Plusieurs choix possibles <h4>
        <!--<div id="horizontal"><table><tr>
            <th>Couvre-joint</th>
            <th>Bord à Bord</th>
        </tr></table></div>-->

        <div id="horizontal"> 
		  
		<form action="evidence_remplissage.php" method="post">
           <div class="blocimage"><span class="legend"> Couvre-joint </span><input type="submit" id="horizontal_item" name="produit" value="e_cj" alt="Submit Form" class="image1"/></div>
            <div class="blocimage"><span class="legend"> Bord à bord </span><input type="submit" id="horizontal_item" name="produit" value="e_bb" alt="Submit Form"  class="image2"/></div>
        </form></div>
		
	<footer>
       <button onclick="window.location.href='../index.php'">Précédent</button>
    </footer>
	
    </div>

    </body>

    
</html>