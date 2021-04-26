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
                width: 40%;
				max-width: 271px;
                height: 100%;
				max-height: 259px;
				cursor: pointer;}
            .image2{
                border:none;
                background-image:url('../ressources/porte_pleine.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 52%;
				max-width: 347px;
                height: 100%;
				max-height: 259px;
				cursor: pointer;}
            .image3{
                border:none;
                background-image:url('../ressources/porte_vitre.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 37%;
				max-width: 202px;
                height: 100%;
				max-height: 259px;
				cursor: pointer;}
            .image4{
                border:none;
                background-image:url('../ressources/porte_coulissante.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 53%;
				max-width: 311px;
                height: 100%;
				max-height: 259px;
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
            <h3>EVIDENCE - CHOIX PORTE</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal"> 
			<span class="legend3"> Bi-Affleurante </span>
			<span class="legend3"> Pleine </span>
			<span class="legend3"> Vitré </span>
			<span class="legend3"> Coulissante </span>
			
			<form action="evidence_portes_formulaire.php" method="post">
                <input type="submit" id="horizontal_item" name="porte" value="porte_bi" alt="Submit Form" class="image1"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_pleine" alt="Submit Form"  class="image2"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_vitre" alt="Submit Form"  class="image3"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_coulissante" alt="Submit Form"  class="image4"/>
            </form>
			</div>
        </div>

    </body>

    <footer>
        <button onclick="window.location.href='evidence_finition.php'">Précédent</button>
    </footer>
</html>